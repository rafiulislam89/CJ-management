<?php

namespace App\Http\Controllers\SupportTeam;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetAllocation;
use App\Models\Client;
use Illuminate\Http\Request;

class AssetAllocationController extends Controller
{

    public function index()
    {
        $allocations = AssetAllocation::with(['company', 'inventory'])->get();
        $clients = Client::where('status', 'active')->get();
        $assets = Asset::all();

        return view('pages.support_team.asset-allocations.list', compact('allocations', 'clients', 'assets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:clients,id',
            'inventory_id' => 'required|exists:assets,id',
            'allocation_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:allocation_date',
            'status' => 'required|in:active,pending,expired',
        ]);

        AssetAllocation::create([
            'client_id' => $request->company_id,
            'assets_id' => $request->inventory_id,
            'allocation_date' => $request->allocation_date,
            'expiry_date' => $request->expiry_date,
            'status' => $request->status,
        ]);

        return redirect()->route('asset-allocations.index')->with('flash_success', 'Asset allocation created successfully.');
    }

    public function edit($id)
    {
        $allocation = AssetAllocation::findOrFail($id);
        $clients = Client::where('status', 'active')->get();
        $assets = Asset::all();

        return view('pages.support_team.asset-allocations.edit', compact('allocation', 'clients', 'assets'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'company_id' => 'required|exists:clients,id',
            'inventory_id' => 'required|exists:assets,id',
            'allocation_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:allocation_date',
            'status' => 'required|in:active,pending,expired',
        ]);

        $allocation = AssetAllocation::findOrFail($id);

        $allocation->update([
            'client_id' => $request->company_id,
            'assets_id' => $request->inventory_id,
            'allocation_date' => $request->allocation_date,
            'expiry_date' => $request->expiry_date,
            'status' => $request->status,
        ]);

        return redirect()->route('asset-allocations.index')->with('flash_success', 'Asset allocation updated successfully.');
    }


    public function destroy($id)
    {
        $allocation = AssetAllocation::findOrFail($id);

        // Delete the allocation
        $allocation->delete();

        return redirect()->route('asset-allocations.index')->with('flash_success', 'Asset allocation deleted successfully.');
    }
}
