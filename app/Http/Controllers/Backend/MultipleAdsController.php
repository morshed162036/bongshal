<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MultipleAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class MultipleAdsController extends Controller
{
    public function index()
    {
        $multipleAds = MultipleAds::all(); 
        return view('backend.ads', compact('multipleAds')); 
    }

    public function create()
    {
        return redirect()->route('ads.index'); 
    }
    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|in:single_main_banner,single_side_banner,double_banner,triple_banner',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive', 
        ];
        $request->validate($rules);
        try {
            $ad = new MultipleAds();
            $ad->fill($request->only(['type', 'title', 'subtitle', 'url', 'status']));
            $imagePath = 'images/multiple_ads/';
            // Handle up to three images
            for ($i = 1; $i <= 3; $i++) {
                $fieldName = "image_$i";
                if ($request->hasFile($fieldName)) {
                    $image_temp = $request->file($fieldName);
                    if ($image_temp->isValid()) {
                        $extension = $image_temp->getClientOriginalExtension();
                        // Ensure unique name, incorporating the index
                        $imageName = time() . '-' . uniqid() . '-' . $i . '.' . $extension; 
                        $image_temp->move(public_path($imagePath), $imageName);
                        $ad->$fieldName = $imagePath . $imageName;
                    }
                }
            }

            $ad->save();
            Session::flash('success', 'Multiple Ad created successfully!');
            
        } catch (\Exception $e) {
            Log::error("Multiple Ad Store Error: " . $e->getMessage());
            Session::flash('error', 'Failed to create Multiple Ad: ' . $e->getMessage());
        }

        return redirect()->route('ads.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $multipleAd = MultipleAds::findOrFail($id);
            $multipleAds = MultipleAds::all();
            return view('backend.ads', compact('multipleAd', 'multipleAds'));
            
        } catch (\Exception $e) {
            Session::flash('error', 'Multiple Ad not found.');
            return redirect()->route('ads.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'type' => 'required|in:single_main_banner,single_side_banner,double_banner,triple_banner',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive', 
        ];

        $request->validate($rules);

        try {
            $ad = MultipleAds::findOrFail($id);
            $ad->fill($request->only(['type', 'title', 'subtitle', 'url', 'status']));            
            $imagePath = 'images/multiple_ads/';
            for ($i = 1; $i <= 3; $i++) {
                $fieldName = "image_$i";   
                if ($request->hasFile($fieldName)) {
                    // 1. Delete old image if it exists
                    if ($ad->$fieldName && File::exists(public_path($ad->$fieldName))) {
                        File::delete(public_path($ad->$fieldName));
                    }
                    
                    // 2. Upload new image
                    $image_temp = $request->file($fieldName);
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '-' . uniqid() . '-' . $i . '.' . $extension;
                    $image_temp->move(public_path($imagePath), $imageName);
                    $ad->$fieldName = $imagePath . $imageName;
                }
            }
            
            $ad->save();
            Session::flash('success', 'Multiple Ad updated successfully!');

        } catch (\Exception $e) {
            Log::error("Multiple Ad Update Error: " . $e->getMessage());
            Session::flash('error', 'Failed to update Multiple Ad: ' . $e->getMessage());
        }

        return redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $ad = MultipleAds::findOrFail($id);
            
            // Delete associated files (up to three)
            for ($i = 1; $i <= 3; $i++) {
                $fieldName = "image_$i";
                if ($ad->$fieldName && File::exists(public_path($ad->$fieldName))) {
                    File::delete(public_path($ad->$fieldName));
                }
            }
            $ad->delete();
            Session::flash('success', 'Multiple Ad deleted successfully!');
            
        } catch (\Exception $e) {
            Log::error("Multiple Ad Delete Error: " . $e->getMessage());
            Session::flash('error', 'Failed to delete Multiple Ad: ' . $e->getMessage());
        }

        return redirect()->route('ads.index');
    }

    /**
     * Show the specified resource (Redirects to edit as per the pattern).
     */
    public function show(string $id) 
    { 
        return redirect()->route('ads.edit', $id); 
    }
}
