<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Support\Str;
use App\Helpers\Qs;
use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        $assetCount = $assets->count(); // total number of assets
        $serialNumber = 'Cj-' ;
        $assets = Asset::orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.support_team.asset.list', [
            'assets' => $assets,
            'assetCount' => $assetCount,
            'serialNumber' => $serialNumber,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255', // Added
            'model' => 'nullable|string|max:255',
            'serial_number' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:active,in_use,under_maintenance,retired',
        ]);

        $data = [
            'category' => $request->category,
            'brand' => $request->brand, // Added
            'model' => $request->model,
            'serial_number' => $request->serial_number,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'user_id' => auth()->user()->id,
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/assets'), $imageName);
            $data['image'] = $imageName;
        }

        Asset::create($data);

        return Qs::storeOk('assets.index');
    }




    public function edit(Asset $asset)
    {
        return view('pages.support_team.asset.edit', compact('asset'));
    }

    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'serial_number' => 'required|string|max:255',
            'status' => 'required|in:active,in_use,under_maintenance,retired',
            'start_date' => 'required|date',
            'end_date' => 'date|after_or_equal:start_date',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['category', 'brand', 'model', 'serial_number', 'start_date', 'end_date', 'status']);

        if ($request->hasFile('image')) {
            if ($asset->image && file_exists(public_path('uploads/assets/' . $asset->image))) {
                unlink(public_path('uploads/assets/' . $asset->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/assets'), $imageName);
            $data['image'] = $imageName;
        }

        $asset->update($data);

        return Qs::updateOk('assets.index');
    }

    public function destroy($id)
    {
        $asset = Asset::find($id);
        $asset->delete();

        return QS::DeleteOk('assets.index');
    }
}
