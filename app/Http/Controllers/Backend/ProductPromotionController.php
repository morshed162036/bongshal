<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductPromotion;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ProductPromotionController extends Controller
{
    public function index()
    {
        $promotions = ProductPromotion::all();
        return view('backend.productpromotion', compact('promotions'));
    }

    public function create()
    {
        return redirect()->route('promotions.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description_short' => 'nullable|string|max:500',
            'url' => 'nullable|url|max:255',
            'label' => 'nullable|string|max:50',
            'status' => 'required|in:active,inactive',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $promotion = new ProductPromotion();
            $promotion->title = $request->title;
            $promotion->description_short = $request->description_short;
            $promotion->url = $request->url;
            $promotion->label = $request->label;
            $promotion->status = $request->status;

            //  Image Upload
            if ($request->hasFile('image')) {
                $image_temp = $request->file('image');
                if ($image_temp->isValid()) {
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '-' . uniqid() . '.' . $extension;
                    $imagePath = 'images/promotions'; 
                    // Matches the Blade file path
                    $image_temp->move(public_path($imagePath), $imageName);
                    $promotion->image = $imageName;
                }
            }
            
            $promotion->save();
            Session::flash('success', 'Product Promotion created successfully!');
            
        } catch (\Exception $e) {
            \Log::error("Product Promotion Store Error: " . $e->getMessage());
            Session::flash('error', 'Failed to create Product Promotion: ' . $e->getMessage());
        }

        return redirect()->route('promotions.index');
    }

    public function edit(string $id)
    {
        try {
            $promotion = ProductPromotion::findOrFail($id);
            $promotions = ProductPromotion::all(); 
            return view('backend.productpromotion', compact('promotion', 'promotions'));
            
        } catch (\Exception $e) {
            Session::flash('error', 'Promotion not found.');
            return redirect()->route('promotions.index');
        }
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description_short' => 'nullable|string|max:500',
            'url' => 'nullable|url|max:255',
            'label' => 'nullable|string|max:50',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $promotion = ProductPromotion::findOrFail($id);
            $promotion->title = $request->title;
            $promotion->description_short = $request->description_short;
            $promotion->url = $request->url;
            $promotion->label = $request->label;
            $promotion->status = $request->status;
            // 2. Handle Image Update
            if ($request->hasFile('image')) {
                $image_temp = $request->file('image');
                if ($image_temp->isValid()) {
                    $imagePath = 'images/promotions/';
                    if ($promotion->image && File::exists(public_path($imagePath . $promotion->image))) {
                        File::delete(public_path($imagePath . $promotion->image));
                    }
                    // Upload the new image
                    $extension = $image_temp->getClientOriginalExtension();
                    $imageName = time() . '-' . uniqid() . '.' . $extension;
                    $image_temp->move(public_path($imagePath), $imageName);
                    $promotion->image = $imageName;
                }
            }
            
            $promotion->save();
            Session::flash('success', 'Product Promotion updated successfully!');

        } catch (\Exception $e) {
            \Log::error("Product Promotion Update Error: " . $e->getMessage());
            Session::flash('error', 'Failed to update Product Promotion: ' . $e->getMessage());
        }

        return redirect()->route('promotions.index');
    }

    public function destroy(string $id)
    {
        try {
            $promotion = ProductPromotion::findOrFail($id);
            $imagePath = 'images/promotions/';
            if ($promotion->image && File::exists(public_path($imagePath . $promotion->image))) {
                File::delete(public_path($imagePath . $promotion->image));
            }
            $promotion->delete();
            Session::flash('success', 'Product Promotion deleted successfully!');
            
        } catch (\Exception $e) {
            \Log::error("Product Promotion Delete Error: " . $e->getMessage());
            Session::flash('error', 'Failed to delete Product Promotion: ' . $e->getMessage());
        }

        return redirect()->route('promotions.index');
    }
    public function show(string $id) { return redirect()->route('promotions.edit', $id); }
}
