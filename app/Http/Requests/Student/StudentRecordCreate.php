<?php
namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\Qs;

class StudentRecordCreate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'student_name' => 'required',
            'email' => 'sometimes|nullable|email|max:255|unique:users,email',
            'gender' => 'required|in:Male,Female',
            'phone' => 'sometimes|nullable|string|max:20',
            'phone2' => 'sometimes|nullable|string|max:20',
            'adm_no' => 'sometimes|nullable|alpha_num|min:3|max:30|unique:student_records',
            'year_admitted' => 'string',
            'my_class_id' => 'exists:my_classes,id',
            'section_id' => 'exists:sections,id',
            'admission_date' => 'sometimes|nullable|date',
            'age' => 'nullable|string|max:250',
            'dob' => 'sometimes|nullable|date',
            'father_name' => 'sometimes|nullable|string|max:255',
            'mother_name' => 'sometimes|nullable|string|max:255',
            'permanent_address' => 'sometimes|nullable|string|max:255',
            'village' => 'sometimes|nullable|string|max:255',
            'post_office' => 'sometimes|nullable|string|max:255',
            'police_station' => 'sometimes|nullable|string|max:255',
            'district' => 'sometimes|nullable|string|max:255',
            'guardian_name' => 'sometimes|nullable|string|max:255',
            'guardian_relation' => 'sometimes|nullable|string|max:255',
            'guardian_occupation' => 'sometimes|nullable|string|max:255',
            'guardian_mobile' => 'sometimes|nullable|string|max:20',
            'previous_institution_name' => 'sometimes|nullable|string|max:255',
            'previous_institution_address' => 'sometimes|nullable|string|max:255',
            'prev_class_admitted' => 'sometimes|nullable|string|max:255',
            'examiner' => 'sometimes|nullable|string|max:255',
            'is_residential' => 'sometimes|nullable|in:0,1',
            'department' => 'sometimes|nullable|in:noorani,najera,hifz,sunani',
            'photo' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',
            'my_parent_id' => 'sometimes|nullable|exists:users,id',
            'discount' => 'sometimes|nullable|integer',
            'house' => 'sometimes|nullable|string|max:255',
            'prev_exam_result' => 'sometimes|nullable|string|max:255',
            'prev_arabic_result' => 'sometimes|nullable|string|max:255',
            'prev_academic_result' => 'sometimes|nullable|string|max:255',
        ];
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();
//        $input['my_parent_id'] = $input['my_parent_id'] ? Qs::decodeHash($input['my_parent_id']) : null;
        $this->getInputSource()->replace($input);
        return parent::getValidatorInstance();
    }
}
