<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdingController extends Controller
{
    public function index()
    {
        $ads = Ading::all(); // Retrieve all ads
        return view('backend.ading', compact('ads')); // Use ading.index view
    }
    public function create()
    {
        return redirect()->route('ading.index'); 
    }

    // --- STORE ---
    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|in:image,video',
            'link' => 'nullable|url|max:255',
            'status' => 'required|in:Active,Inactive',
        ];
        if ($request->type === 'image') {
            $rules['image_file'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'; // Use image_file from Blade
            $rules['video_url'] = 'nullable';
        } else {
            $rules['video_url'] = 'required|url|max:255';
            $rules['image_file'] = 'nullable';
        }
        $request->validate($rules);
        try {
            $ad = new Ading();
            $ad->type = $request->type;
            $ad->link = $request->link;
            $ad->status = $request->status;
            if ($request->type === 'image' && $request->hasFile('image_file')) {
                $image_temp = $request->file('image_file');
                if ($image_temp->isValid()) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '-' . uniqid() . '.' . $extension;
                    $imagePath = 'images/ads';
                    $image_temp->move(public_path($imagePath), $imageName);
                    $ad->image = $imagePath . '/' . $imageName;
                    $ad->video_url = null;
                }
            }
            if ($request->type === 'video') {
                $ad->video_url = $request->video_url;
                $ad->image = null;
            }

            $ad->save();
            Session::flash('success', 'Ad created successfully!');
            
        } catch (\Exception $e) {
            \Log::error("Ad Store Error: " . $e->getMessage());
            Session::flash('error', 'Failed to create Ad: ' . $e->getMessage());
        }

        return redirect()->route('ading.index');
    }

    // --- EDIT ---
    public function edit(string $id)
    {
        try {
            $ad = Ading::findOrFail($id);
            $ads = Ading::all(); 
            return view('backend.ading', compact('ad', 'ads'));
            
        } catch (\Exception $e) {
            Session::flash('error', 'Ad not found.');
            return redirect()->route('ading.index');
        }
    }

    // --- UPDATE ---
    public function update(Request $request, string $id)
    {
        $rules = [
            'type' => 'required|in:image,video',
            'link' => 'nullable|url|max:255',
            'status' => 'required|in:Active,Inactive',
        ];
        if ($request->type === 'image') {
            $rules['image_file'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            $rules['video_url'] = 'nullable';
        } else { 
            $rules['video_url'] = 'required|url|max:255';
            $rules['image_file'] = 'nullable';
        }

        $request->validate($rules);

        try {
            $ad = Ading::findOrFail($id);
            $ad->type = $request->type;
            $ad->link = $request->link;
            $ad->status = $request->status;

            $imagePath = 'images/ads/'; 
            if ($request->type === 'image') {
                if ($request->hasFile('image_file')) {
                    // Delete old image if it exists
                    if ($ad->image && File::exists(public_path($ad->image))) {
                        File::delete(public_path($ad->image));
                    }
                    $image_temp = $request->file('image_file');
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '-' . uniqid() . '.' . $extension;
                    $image_temp->move(public_path($imagePath), $imageName);
                    $ad->image = $imagePath . $imageName;
                }
                $ad->video_url = null;
            }
            if ($request->type === 'video') {
                if ($ad->image && File::exists(public_path($ad->image))) {
                    File::delete(public_path($ad->image));
                    $ad->image = null;
                }
                $ad->video_url = $request->video_url;
            }
            
            $ad->save();
            Session::flash('success', 'Ad updated successfully!');

        } catch (\Exception $e) {
            \Log::error("Ad Update Error: " . $e->getMessage());
            Session::flash('error', 'Failed to update Ad: ' . $e->getMessage());
        }

        return redirect()->route('ading.index');
    }

    // --- DESTROY ---
    public function destroy(string $id)
    {
        try {
            $ad = Ading::findOrFail($id);
            
            // Delete associated file if it's an image
            if ($ad->type === 'image' && $ad->image && File::exists(public_path($ad->image))) {
                File::delete(public_path($ad->image));
            }
            
            $ad->delete();
            Session::flash('success', 'Ad deleted successfully!');
            
        } catch (\Exception $e) {
            \Log::error("Ad Delete Error: " . $e->getMessage());
            Session::flash('error', 'Failed to delete Ad: ' . $e->getMessage());
        }

        return redirect()->route('ading.index');
    }

    // --- SHOW (Redirects to edit as per your pattern) ---
    public function show(string $id) 
    { 
        return redirect()->route('ading.edit', $id); 
    }
}
