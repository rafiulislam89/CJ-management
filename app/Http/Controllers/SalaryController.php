<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Salary;
use App\User;
use Qs;


class SalaryController extends Controller
{
    public function index()
    {
        $salaries = Salary::with(['user', 'receiverUser'])->get();
        return view('pages.support_team.salary.list', compact('salaries'));
    }

    public function create()
    {
        $users = User::all();
        return view('pages.support_team.salary.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'receiver' => 'required|integer|exists:users,id',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);
        $date = $request->input('date', Carbon::now()->toDateString());
        $carbonDate = Carbon::parse($date);
        $month = $carbonDate->format('F');
        $year = $carbonDate->format('Y');
        $validated['user_id'] = auth()->user()->id;
        $validated['month'] = $month;
        $validated['year'] = $year;

        Salary::create($validated);
        return Qs::storeOk('salaries.index');
    }

    public function show($id)
    {
        $salary = Salary::findOrFail($id);
        return view('pages.support_team.salary.show', compact('salary'));
    }



    public function edit($id)
    {
        $salary = Salary::findOrFail($id);
        $users = User::all();
        return view('pages.support_team.salary.edit', compact('salary', 'users'));
    }
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'receiver' => 'required|integer|exists:users,id',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        $salary = Salary::findOrFail($id);
        $date = $request->input('date', Carbon::now()->toDateString());
        $carbonDate = Carbon::parse($date);
        $month = $carbonDate->format('F');
        $year = $carbonDate->format('Y');


        $validated['user_id'] = auth()->user()->id;
        $validated['month'] = $month;
        $validated['year'] = $year;

        $salary->update($validated);


        return Qs::updateOk('salaries.index');
    }


    public function destroy($id)
    {
        $salary = Salary::findOrFail($id);
        $salary->delete();
        return Qs::deleteOk('salaries.index'); // Updated to use Qs helper
    }
}
