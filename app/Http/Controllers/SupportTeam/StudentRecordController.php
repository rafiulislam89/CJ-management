<?php
namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Helpers\Mk;
use App\Http\Middleware\Custom\Student;
use App\Http\Requests\Student\StudentRecordCreate;
use App\Http\Requests\Student\StudentRecordUpdate;
use App\Models\StudentRecord;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\StudentRepo;
use App\Repositories\UserRepo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class StudentRecordController extends Controller
{
    protected $loc, $my_class, $user, $student;


    public function __construct(LocationRepo $loc, MyClassRepo $my_class, UserRepo $user, StudentRepo $student)
    {
        $this->middleware('teamSA', ['only' => ['edit', 'update', 'reset_pass', 'create', 'store', 'graduated']]);
        $this->middleware('super_admin', ['only' => ['destroy']]);
        $this->loc = $loc;
        $this->my_class = $my_class;
        $this->user = $user;
        $this->student = $student;
    }


    public function reset_pass($st_id)
    {
        $st_id = Qs::decodeHash($st_id);
        $data['password'] = Hash::make('student');
        $this->user->update($st_id, $data);
        return back()->with('flash_success', __('msg.p_reset'));
    }

    /**
     * Display the form to create a new student record
     */
    public function create()
    {
        $data['my_classes'] = $this->my_class->all();
//        $data['parents'] = $this->user->getUserByType('parent');
        $data['states'] = $this->loc->getStates();
        $data['nationals'] = $this->loc->getAllNationals();
        return view('pages.support_team.students.add', $data);
    }

    /**
     * Store a new student record
     */
    public function store(StudentRecordCreate $req)
    {
        $userData = $req->only(['email', 'phone', 'phone2', 'gender']);
        $userData['user_type'] = 'student';
        $userData['name'] = $req->student_name;
        $userData['password'] = Hash::make('student');
        $userData['photo'] = Qs::getDefaultUserImage();

        if ($req->hasFile('photo')) {
            $photo = $req->file('photo');
            $f = Qs::getFileMetaData($photo);
            $f['name'] = 'photo_' . time() . '.' . $f['ext'];
            $destinationPath = public_path('uploads/students/' . $userData['name']);
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0775, true);
            }
            $photo->move($destinationPath, $f['name']);
            $userData['photo'] = 'uploads/students/' . $userData['name'] . '/' . $f['name'];
        }
        $userData['code'] = strtoupper(Str::random(10));
        $user = $this->user->create($userData);
        $srData = $req->except(['email', 'phone', 'phone2', 'gender', 'photo']);
        $srData['user_id'] = $user->id;
        $srData['session'] = Qs::getSetting('current_session');
        if (!$req->adm_no) {
            $ct = $this->my_class->findTypeByClass($req->my_class_id)->code;
            $srData['adm_no'] = strtoupper(Qs::getAppCode() . '/' . $ct . '/' . '/' . mt_rand(1000, 99999));
        }
        $srData['student_code'] = $userData['code'];
        $srData['dob'] = date('Y-m-d', strtotime($req->dob));
        $srData['admission_date'] = date('Y-m-d', strtotime($req->admission_date));
        // Store photo in student record as well
        $srData['photo'] = $userData['photo'];
        $srData['age'] = $req->age; // Ensure Bangla text is assigned correctly

        $this->student->createRecord($srData);

//        return redirect()->route('students.index')->with('success', 'Student created successfully');

//        return Qs::jsonStoreOk('Student added successfully');
        return Qs::storeOk('students.index'); // Updated to use Qs helper

    }


    /**
     * List students by class
     */
    public function listByClass($class_id)
    {
        $data['my_class'] = $mc = $this->my_class->getMC(['id' => $class_id])->first();
        $data['students'] = $this->student->findStudentsByClass($class_id);
        $data['sections'] = $this->my_class->getClassSections($class_id);
        return is_null($mc) ? Qs::goWithDanger() : view('pages.support_team.students.list', $data);
    }
    public function index()
    {
        $data['students'] = $mc = $this->student->findActiveStudents();
        return is_null($mc) ? Qs::goWithDanger() : view('pages.support_team.students.list', $data);
    }

    /**
     * Display a list of graduated students
     */
    public function graduated()
    {
        $data['my_classes'] = $this->my_class->all();
        $data['students'] = $this->student->allGradStudents();
        return view('pages.support_team.students.graduated', $data);
    }

    public function not_graduated($sr_id)
    {
        $d['grad'] = 0;
        $d['grad_date'] = null;
        $d['session'] = Qs::getSetting('current_session');
        $this->student->updateRecord($sr_id, $d);
        return back()->with('flash_success', __('msg.update_ok'));
    }

    /**
     * Display a student's profile
     */
    public function show($sr_id)
    {
        $sr_id = Qs::decodeHash($sr_id);
        if (!$sr_id) {
            return Qs::goWithDanger();
        }

        $data['sr'] = $this->student->getRecord(['id' => $sr_id])->first();

        if (Auth::user()->id != $data['sr']->user_id && !Qs::userIsTeamSAT() && !Qs::userIsMyChild($data['sr']->user_id, Auth::user()->id)) {
            return redirect(route('dashboard'))->with('pop_error', __('msg.denied'));
        }

        $data['sr']->load('user', 'my_class', 'section');
        return view('pages.support_team.students.show', $data);
    }
    public function info_print($sr_id)
    {
        $data['sr'] = StudentRecord::where('id', $sr_id)->first();
        if (!Qs::userIsTeamSAT() && !Qs::userIsMyChild($data['sr']->user_id, Auth::user()->id)) {
            return redirect(route('dashboard'))->with('pop_error', __('msg.denied'));
        }

        $data['sr']->load('user', 'my_class', 'section');
        return view('pages.support_team.students.print', $data);
    }

    /**
     * Display the form to edit a student's record
     */
    public function edit($sr_id)
    {
        $sr_id = Qs::decodeHash($sr_id);
        if (!$sr_id) {
            return Qs::goWithDanger();
        }
        $data['sr'] = $this->student->getRecord(['id' => $sr_id])->first();
        if (!$data['sr']) {
            return Qs::goWithDanger();
        }
        $data['my_classes'] = $this->my_class->all();
//        $data['parents'] = $this->user->getUserByType('parent');
        $data['states'] = $this->loc->getStates();
        $data['nationals'] = $this->loc->getAllNationals();
        return view('pages.support_team.students.edit', $data);
    }

    public function update(StudentRecordUpdate $req, $sr_id)
    {
        try {
            $sr_id = Qs::decodeHash($sr_id);
            if (!$sr_id) {
                return Qs::goWithDanger();
            }
            $studentRecord = $this->student->getRecord(['id' => $sr_id])->first();
            if (!$studentRecord) {
                return Qs::goWithDanger();
            }

            // Update user information
            $userData = $req->only(['email', 'phone', 'phone2', 'gender', 'photo']);
            $userData['name'] = $req->student_name;

            if ($req->hasFile('photo')) {
                $photo = $req->file('photo');
                $f = Qs::getFileMetaData($photo);
                $f['name'] = 'photo_' . time() . '.' . $f['ext'];
                $destinationPath = public_path('uploads/students/' . $userData['name']);
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0775, true);
                }
                $photo->move($destinationPath, $f['name']);
                $userData['photo'] = 'uploads/students/' . $userData['name'] . '/' . $f['name'];
            }

            $this->user->update($studentRecord->user_id, $userData);

            // Update student record data
            $srData = $req->except(['email', 'phone', 'phone2', 'gender']);
            $srData['dob'] = date('Y-m-d', strtotime($req->dob));
            $srData['admission_date'] = date('Y-m-d', strtotime($req->admission_date));
            if (isset($userData['photo'])) {
                $srData['photo'] = $userData['photo'];
            }

            $this->student->updateRecord($sr_id, $srData);

//        return Qs::jsonUpdateOk('Student record updated successfully');
            return Qs::updateOk('students.index'); // Updated to use Qs helper
        }catch (Exception $e){
            return $e;
        }
    }

    /**
     * Delete a student's record
     */
    public function destroy($st_id)
    {
        $st_id = Qs::decodeHash($st_id);
        if (!$st_id) {
            return Qs::goWithDanger();
        }
        $sr = $this->student->getRecord(['user_id' => $st_id])->first();
        if (!$sr) {
            return back()->with('flash_danger', 'Student record not found');
        }
        if (!$sr->user) {
            return back()->with('flash_danger', 'User relationship not found for student');
        }
        $path = Qs::getUploadPath('student') . $sr->user->name;
        if (Storage::exists($path)) {
            Storage::deleteDirectory($path);
        }
        $this->user->delete($sr->user->id);
        $sr->delete();

        return back()->with('flash_success', __('msg.del_ok'));
    }
}

