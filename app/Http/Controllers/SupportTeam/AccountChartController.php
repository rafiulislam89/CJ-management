<?php

namespace App\Http\Controllers\SupportTeam;

use App\Http\Controllers\Controller;
use App\Models\AccountChart;
use Illuminate\Http\Request;

class AccountChartController extends Controller
{
    public function index()
    {
        // Fetch all accounts from the database
        $accounts = AccountChart::all();

        // Return to the view with the accounts data
        return view('pages.support_team.account_charts.list', compact('accounts'));
    }

    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'code'            => 'required|unique:account_charts,code|max:50',
            'name'            => 'required|string|max:100',
            'type'            => 'required|in:asset,liability,equity,income,expense',
            'opening_balance' => 'nullable|numeric|min:0',
            'status'          => 'required|in:active,inactive',
        ]);

        // Create the account chart record
        AccountChart::create($validated);

        // Redirect back with success message
        return redirect()->route('account_charts.index')->with('flash_success', 'Account Chart created successfully!');
    }

    public function edit($id)
    {
        $account = AccountChart::findOrFail($id);
        return view('pages.support_team.account_charts.edit', compact('account'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'code'            => 'required|max:50|unique:account_charts,code,' . $id,
            'name'            => 'required|string|max:100',
            'type'            => 'required|in:asset,liability,equity,income,expense',
            'opening_balance' => 'nullable|numeric|min:0',
            'status'          => 'required|in:active,inactive',
        ]);

        $account = AccountChart::findOrFail($id);
        $account->update($validated);

        return redirect()->route('account_charts.index')->with('flash_success', 'Account updated successfully!');
    }
    public function destroy($id)
    {
        $account = AccountChart::findOrFail($id);
        $account->delete();

        return redirect()->route('account_charts.index')->with('flash_success', 'Account deleted successfully!');
    }
}
