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

        $categories = $assets->pluck('category')->unique()->filter();

        return view('pages.support_team.asset-allocations.list', compact(
            'allocations',
            'clients',
            'assets',
            'categories'
        ));
    }

    public function getBrands(Request $request)
    {
        $brands = Asset::where('category', $request->category)
            ->pluck('brand')
            ->unique()
            ->filter()
            ->values();

        return response()->json($brands);
    }

    public function getModels(Request $request)
    {
        $models = Asset::where('category', $request->category)
            ->where('brand', $request->brand)
            ->select('id', 'model')
            ->distinct()
            ->get();

        return response()->json($models);
    }


    public function getSerialNumbers(Request $request)
    {
        $category = $request->input('category');
        $brand = $request->input('brand');
        $model = $request->input('model');

        $assets = Asset::where('category', $category)
            ->where('brand', $brand)
            ->where('model', $model)
            ->get(['serial_number']);

        return response()->json($assets);
    }


    public function store(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:clients,id',
            'inventory_id' => 'exists:assets,id',
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
        $categories = Asset::distinct()->pluck('category'); // Assuming you're using 'assets' table
        return view('pages.support_team.asset-allocations.edit', compact('allocation', 'clients', 'categories'));
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
