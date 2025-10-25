<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brand; // Assuming you have a brand model
use App\Models\Attribute; // Assuming you have an Attribute model
use App\Models\AttributeValue; // Assuming you have an AttributeValue model
use App\Models\Slider; // Assuming you have a Slider model
use App\Models\Company; // Assuming you have a Company model
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
    //     public function company(Request $request, string $id = null)
    // {
    //     $brands = Company::get()->all();
    //     if ($id) {
    //         $brand = Company::findorFail($id);
    //     }
    //     else
    //     {
    //         $brand = '';
    //     }
    //     if($request->isMethod('post'))
    //     {
    //         // dd($request->all());
    //         if(empty($brand))
    //         {
    //             $brand = new Company();
    //         }
    //         $brand->name = $request->name;
    //         $brand->details = $request->details;
    //         // $brand->email = $request->email;
    //         $brand->phone = $request->phone;
    //         // $brand->mobile = $request->mobile;
    //         $brand->order = $request->order;
    //         // $brand->url = $request->url;
    //         // $brand->map = $request->map;
    //         $brand->status = $request->status;
    //         // dd($brand);

    //         if($request->hasFile('image')){
    //             $exists = public_path('images/company/'.$brand->image);
    //             if(File::exists($exists))
    //             {
    //                 File::delete($exists);
    //             }
    //             $image_temp = $request->file('image');
    //             if($image_temp->isValid()){
    //                 //Get Image Extension
    //                 $extension = $image_temp->getClientOriginalExtension();
    //                 //Generate New Image Name
    //                 $imageName = time().'.'.$extension;
    //                 $imagePath = 'images/company';
    //                 $image_temp->move(public_path($imagePath),$imageName);
    //                 $brand->logo = $imageName;
    //             }
    //         }
    //         //dd($brand);
    //         if (!empty($id)) {
    //             $brand -> update();
    //             return redirect(route('company'))->with('success','Update Success!!');
    //         } else {
    //             $brand -> save();
    //             // dd($brand);
    //             return redirect(route('company'))->with('success','Create Success!!');
    //         }
    //     }
    //     return view('backend.company',compact('brands','brand'));

    // }
    public function company(Request $request, string $id = null)
{
    $brands = Company::all();

    $brand = $id ? Company::findOrFail($id) : "";

    if ($request->isMethod('post')) {
        $brand = $id ? Company::findOrFail($id) : new Company();
        // Validation with unique name
        $validated = $request->validate([
            'name'   => [
                'required',
                'string',
                'max:255',
                Rule::unique('companies', 'name')->ignore($id), // <--- important
            ],
            'details'=> 'nullable|string|max:225',
            'phone'  => 'nullable|string|max:20',
            'order'  => 'nullable|integer',
            'status' => 'required|string|in:active,inactive',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Assign validated data
        $brand->name    = $validated['name'];
        $brand->details = $validated['details'] ?? null;
        $brand->phone   = $validated['phone'] ?? null;
        $brand->order   = $validated['order'] ?? 0;
        $brand->status  = $validated['status'];

        // Image handling
        if ($request->hasFile('image')) {
            // delete old if exists
            if (!empty($brand->logo)) {
                $exists = public_path('images/company/' . $brand->logo);
                if (File::exists($exists)) {
                    File::delete($exists);
                }
            }

            $image      = $request->file('image');
            $extension  = $image->getClientOriginalExtension();
            $imageName  = time() . '.' . $extension;
            $imagePath  = public_path('images/company');

            $image->move($imagePath, $imageName);

            $brand->logo = $imageName;
        }

        // Save or update
        $brand->save();

        return redirect()->route('company')->with('success', $id ? 'Update Success!!' : 'Create Success!!');
    }

    return view('backend.company', compact('brands', 'brand'));
}
        public function brand(Request $request, string $id = null)
    {
        $brands = Brand::get()->all();
        if ($id) {
            $brand = Brand::findorFail($id);
        }
        else
        {
            $brand = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($brand))
            {
                $brand = new Brand();
            }
            $brand->name = $request->name;
            $brand->details = $request->details;
            // $brand->email = $request->email;
            $brand->phone = $request->phone;
            // $brand->mobile = $request->mobile;
            $brand->order = $request->order;
            // $brand->url = $request->url;
            // $brand->map = $request->map;
            $brand->status = $request->status;
            // dd($brand);

            if($request->hasFile('image')){
                $exists = public_path('images/brand/'.$brand->image);
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('image');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'.'.$extension;
                    $imagePath = 'images/brand';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $brand->logo = $imageName;
                }
            }
            //dd($brand);
            if (!empty($id)) {
                $brand -> update();
                return redirect(route('brand'))->with('success','Update Success!!');
            } else {
                $brand -> save();
                // dd($brand);
                return redirect(route('brand'))->with('success','Create Success!!');
            }
        }
        return view('backend.brand',compact('brands','brand'));

    }
        public function productAttribute(Request $request, string $id = null)
    {
        $attributes = Attribute::get()->all();
        if ($id) {
            $attribute = Attribute::findorFail($id);
        }
        else
        {
            $attribute = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($attribute))
            {
                $attribute = new Attribute();
            }
            $attribute->name = $request->name;
            $attribute->details = $request->details;
            // $brand->order = $request->order;
            $attribute->status = $request->status;
            // dd($attribute);

            if (!empty($id)) {
                $attribute -> update();
                return redirect(route('product.attribute'))->with('success','Update Success!!');
            } else {
                $attribute -> save();
                // dd($brand);
                return redirect(route('product.attribute'))->with('success','Create Success!!');
            }
        }
        return view('backend.productattribute',compact('attributes','attribute'));

    }
        public function productAttributeValue(Request $request, string $id = null)
    {
        $attributevalues = AttributeValue::get()->all();
        $attributes = Attribute::get()->all();
        if ($id) {
            $attributevalue = AttributeValue::findorFail($id);
        }
        else
        {
            $attributevalue = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($attributevalue))
            {
                $attributevalue = new AttributeValue();
            }
            $attributevalue->attribute_id = $request->attribute_id;
            $attributevalue->name = $request->name;
            $attributevalue->details = $request->details;
            // $attributevalue->order = $request->order;
            $attributevalue->status = $request->status;
            // dd($attribute);

            if (!empty($id)) {
                $attributevalue -> update();
                return redirect(route('product.attributeValue'))->with('success','Update Success!!');
            } else {
                $attributevalue -> save();
                // dd($brand);
                return redirect(route('product.attributeValue'))->with('success','Create Success!!');
            }
        }
        return view('backend.product-attribute-value',compact('attributes','attributevalues','attributevalue'));

    }
        public function slider(Request $request, string $id = null)
    {
        $sliders = Slider::get()->all();
        if ($id) {
            $slider = Slider::findorFail($id);
        }
        else
        {
            $slider = '';
        }
        if($request->isMethod('post'))
        {
            // dd($request->all());
            if(empty($slider))
            {
                $slider = new Slider();
            }
            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            // $slider->button_text = $request->button_text;
            $slider->url = $request->url;
            // $slider->phone = $request->phone;
            $slider->order = $request->order;
            $slider->status = $request->status;
            // dd($slider);

            if($request->hasFile('image')){
                $exists = public_path('images/slider/'.$slider->photo);
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('image');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'.'.$extension;
                    $imagePath = 'images/slider';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $slider->photo = $imageName;
                }
            }
            //dd($slider);
            if (!empty($id)) {
                $slider->updated_by = auth()->user()->id;
                $slider -> update();
                return redirect(route('slider'))->with('success','Update Success!!');
            } else {
                $slider->user_id = auth()->user()->id;
                $slider -> save();
                // dd($slider);
                return redirect(route('slider'))->with('success','Create Success!!');
            }
        }
        return view('backend.slider',compact('sliders','slider'));

    }

}
