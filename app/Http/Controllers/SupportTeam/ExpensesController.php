<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Controllers\Controller;
use App\Models\Expense;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('pages.support_team.Expense.list',['expenses'=>$expenses]);
    }




    public function store(Request $request)
    {
        $request->validate([
            'purpose' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);
        $date = $request->input('date', Carbon::now()->toDateString()); // Default to current date if not provided
        $carbonDate = Carbon::parse($date);
        $month = $carbonDate->format('F'); // Example: "March"
        $year = $carbonDate->format('Y');  // Example: "2025"

        // Prepare the data
        $data = [
            'purpose' => $request->purpose,
            'amount' => $request->amount,
            'month' => $month,
            'year' => $year,
            'date' => $carbonDate,
            'type' => 'monthly',
            'user_id' => auth()->user()->id,
        ];
        Expense::insert($data);
        return Qs::storeOk('expenses.index');
    }


    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        return view('pages.support_team.expense.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'purpose' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $date = $request->input('date', Carbon::now()->toDateString()); // Default to current date if not provided
        $carbonDate = Carbon::parse($date);
        $month = $carbonDate->format('F'); // Example: "March"
        $year = $carbonDate->format('Y');  // Example: "2025"

        $expense = Expense::findOrFail($id);
        $expense->update([
            'purpose' => $request->input('purpose'),
            'amount' => $request->input('amount'),
            'date' => $request->input('date'),
//            'type' => $request->input('type'),
            'month' => $month,
            'year' => $year,
        ]);

        return Qs::updateOk('expenses.index');
    }


    public function destroy($id)
    {
        $expense = Expense::find($id);
        $expense->delete();

        return QS::DeleteOk('expenses.index');
    }
}
