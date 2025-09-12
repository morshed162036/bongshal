<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Attribute;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category','brand','bike','attributes')->get();
        // dd($products);

        return view('backend.product.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = \App\Models\Category::where(['status'=>'active','parent_id'=>'1'])->get();
        $categories = \App\Models\Category::where(['status'=>'active'])->get();
        $brands = \App\Models\Brand::where('status','active')->get();
        $attributes = \App\Models\Attribute::where('status','active')->get();
        $bikes = \App\Models\Bike::where('status','active')->get();
        return view('backend.product.create',compact('categories','brands','attributes','bikes'));
        // return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            // 'brand_id'          => 'required|exists:brands,id',
            'bike_id'           => 'required|exists:bikes,id',
            // 'series'            => 'string|max:255',
            'traditional_name'  => 'string|max:255',
            'commercial_name'   => 'string|max:255',
            'part_number'       => 'string|max:255',
            'unit'              => 'required|string|max:50',
            'unit_price'        => 'numeric',
            'image'             => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'multi_image.*'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'size_chart'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'meta_image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle main image
        $imagePath = $request->file('image')->store('products', 'public');

        $brand_name = \App\Models\Brand::find($request->brand_id);
        $series = $request->series;
        $category_name = \App\Models\Category::find($request->category_id)->name;
        $bike_model = \App\Models\Bike::find($request->bike_id)->model;
        $name = $brand_name?$brand_name->name.', ':''.$series.', '.$request->traditional_name.', '.$request->commercial_name.', '.$request->part_number.', '.$bike_model;

         // Handle file upload for the image
        $Imagename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $Imagename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/image'), $Imagename);
            // $product->image = $Imagename; // Save the image path in the database
        }

        // Create product
        $product = Product::create([
            'name'       => $name,
            'slug'              => \Str::slug($name),
            'category_id'       => $request->category_id,
            'brand_id'          => $request->brand_id,
            'bike_id'           => $request->bike_id,
            'series'            => $request->series,
            'traditional_name'  => $request->traditional_name,
            'commercial_name'   => $request->commercial_name,
            'parts_number'       => $request->part_number,
            'unit'              => $request->unit,
            'unit_price'        => $request->unit_price,
            'purchase_price'    => $request->purchase_price,
            'barcode'           => $request->barcode,
            'min_purchase_qty'  => $request->min_purchase_qty,
            'discount'          => $request->discount,
            'discount_type'     => $request->discount_type,
            'start_date'        => $request->start_date,
            'end_date'          => $request->end_date,
            'stock_quantity'    => $request->stock_quantity ?? 0,
            'alert_quantity'    => $request->alert_quantity,
            'weight'            => $request->weight,
            'video'            => $request->youtube_video,
            'sku'               => $request->sku?$request->sku:'SKU-'.strtoupper(\Str::random(8)),
            'description'       => $request->description,
            'is_oem'            => $request->is_oem,
            'is_preorder'       => $request->is_preorder,
            'shipping_time'     => $request->shipping_time,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keywords'     => $request->meta_keywords,
            'status'             => 'active',
            'image'             => $Imagename,
        ]);



        // Handle multi images
        // if ($request->hasFile('multi_image')) {
        //     foreach ($request->file('multi_image') as $multiImg) {
        //         $multiPath = $multiImg->store('images/products/multi', 'public');
        //         $product->images()->create([
        //             'image' => $multiPath
        //         ]);
        //     }
        // }
        // Handle size chart
        if ($request->hasFile('size_chart')) {
            $file = $request->file('size_chart');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/size_chart'), $filename);
            $product->size_chart = $filename; // Save the image path in the database
        }

        // Handle meta image
        if ($request->hasFile('meta_image')) {
            $metaPath = $request->file('meta_image')->store('products/meta', 'public');
            $product->meta_image = $metaPath;
            $product->save();
        }

        // Handle attributes (repeater)
        if ($request->has('group-attribute')) {
            foreach ($request->input('group-attribute') as $attr) {
                if (!empty($attr['attribute_id']) && !empty($attr['attribute_value_id'])) {
                    $product->attributes()->create([
                        'attribute_id'        => $attr['attribute_id'],
                        'attribute_value_id'  => $attr['attribute_value_id'],
                    ]);
                }
            }
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function values($id)
    {
        // dd($id);
        $attribute = Attribute::with('values')->find($id); // assuming relation: Attribute hasMany AttributeValue
        $values = $attribute->values()
            ->select('id', 'name') // change column names if different (e.g. name/label)
            ->orderBy('name')
            ->get();

        return response()->json([
            'status' => true,
            'values' => $values
        ]);
    }

}
