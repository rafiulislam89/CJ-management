<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('pages.support_team.client.list', ['clients' => $clients]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'status' => 'required|in:active,inactive',
        ]);

        $data = [
            'company_name' => $request->company_name,
            'description' => $request->description,
            'joining_date' => $request->joining_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'user_id' => auth()->user()->id,
        ];

        Client::insert($data);
        return Qs::storeOk('client.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id); // find client by ID
        return view('pages.support_team.client.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'joining_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:joining_date',
            'status' => 'required|in:active,inactive',
        ]);

        $client = Client::findOrFail($id);
        $client->update($validated);

        return Qs::updateOk('client.index');
    }

    public function destroy($id) {
        $client = Client::find($id);
        $client->delete();

        return QS::DeleteOk('client.index');
    }
}
