<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;


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
        $catalogues = \App\Models\Catalogue::with('category')->where('status','active')->get();
        $categories = \App\Models\Category::where(['status'=>'active'])->get();
        $brands = \App\Models\Brand::where('status','active')->get();
        $attributes = \App\Models\Attribute::where('status','active')->get();
        $bikes = \App\Models\Bike::where('status','active')->get();
        return view('backend.product.create',compact('catalogues','categories','brands','attributes','bikes'));
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


// dd($request->all());
        $brand_name = \App\Models\Brand::find($request->brand_id);
        $series = $request->series?$request->series.', ':'';
        $category_name = \App\Models\Category::find($request->category_id)->name;
        // $bike_model = \App\Models\Bike::find($request->bike_id)->get();
        // dd($bike_model);
        $bike_model = \App\Models\Bike::find($request->bike_id)->model;

        $name = $brand_name?$brand_name->name.', ':''.$series.$request->traditional_name.', '.$request->commercial_name.', '.$request->part_number.', '.$bike_model;

        DB::beginTransaction();
        try {

        // Create product
        $product = new Product();
        $product->name = $name;
        $product->slug = \Str::slug($name);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->bike_id = $request->bike_id;
        $product->series = $request->series;
        $product->traditional_name = $request->traditional_name;
        $product->commercial_name = $request->commercial_name;
        $product->parts_number = $request->part_number;
        $product->unit = $request->unit;
        $product->unit_price = $request->unit_price;
        $product->purchase_price = $request->purchase_price;
        $product->barcode = $request->barcode;
        $product->min_purchase_qty = $request->min_purchase_qty;
        $product->discount = $request->discount;
        $product->discount_type = $request->discount_type;
        $product->discount_start_date = $request->start_date;
        $product->discount_end_date = $request->end_date;
        $product->stock = $request->stock_quantity ?? 0;
        $product->alert_quantity = $request->alert_quantity?? 0;
        $product->weight = $request->weight;
        $product->video = $request->youtube_video;
        $product->sku = $request->sku?$request->sku:'SKU-'.strtoupper(\Str::random(8));
        $product->description = $request->description;
        $product->is_oem = $request->is_oem;
        $product->is_preorder = $request->is_preorder;
        $product->shipping_time = $request->shipping_time;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->status = 'active';

        // $product = Product::create([
        //     'name'       => $name,
        //     'slug'              => \Str::slug($name),
        //     'category_id'       => $request->category_id,
        //     'brand_id'          => $request->brand_id,
        //     'bike_id'           => $request->bike_id,
        //     'series'            => $request->series,
        //     'traditional_name'  => $request->traditional_name,
        //     'commercial_name'   => $request->commercial_name,
        //     'parts_number'       => $request->part_number,
        //     'unit'              => $request->unit,
        //     'unit_price'        => $request->unit_price,
        //     'purchase_price'    => $request->purchase_price,
        //     'barcode'           => $request->barcode,
        //     'min_purchase_qty'  => $request->min_purchase_qty,
        //     'discount'          => $request->discount,
        //     'discount_type'     => $request->discount_type,
        //     'start_date'        => $request->start_date,
        //     'end_date'          => $request->end_date,
        //     'stock_quantity'    => $request->stock_quantity ?? 0,
        //     'alert_quantity'    => $request->alert_quantity,
        //     'weight'            => $request->weight,
        //     'video'            => $request->youtube_video,
        //     'sku'               => $request->sku?$request->sku:'SKU-'.strtoupper(\Str::random(8)),
        //     'description'       => $request->description,
        //     'is_oem'            => $request->is_oem,
        //     'is_preorder'       => $request->is_preorder,
        //     'shipping_time'     => $request->shipping_time,
        //     'meta_title'        => $request->meta_title,
        //     'meta_description'  => $request->meta_description,
        //     'meta_keywords'     => $request->meta_keywords,
        //     'status'             => 'active',
        //     'image'             => $Imagename,
        // ]);


        // Process base64 images inside `details_bn`
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $request->description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');

            if (strpos($src, 'data:image/') === 0) {
                $data = base64_decode(explode(',', explode(';', $src)[1])[1]);
                $imageName = '/images/products/upload/' . time() . $key . '.png';
                file_put_contents(public_path($imageName), $data);

                $img->setAttribute('src', $imageName); // ✅ set public path for browser
            }
        }

        $product->description = $dom->saveHTML();

         // Handle file upload for the image
        $Imagename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $Imagename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/image'), $Imagename);
            $product->image = $Imagename; // Save the image path in the database
        }

        // Handle size chart
        if ($request->hasFile('size_chart')) {
            $file = $request->file('size_chart');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/size_chart'), $filename);
            $product->size_chart = $filename; // Save the image path in the database
        }

        // Handle meta image
        if ($request->hasFile('meta_image')) {
            $file = $request->file('meta_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/meta'), $filename);
            $product->meta_image = $filename; // Save the image path in the database
        }
        $product->save();


        if($request->hasFile("multi_image"))
        {
            $files = $request->file("multi_image");
            foreach ($files as $file) {
                $imageName = time().'_'.$file->getClientOriginalName();
                $productImg['product_id'] = $product->id;
                $productImg['image'] = $imageName;
                $imagePath = 'images/products/multi';
                $file->move(public_path($imagePath),$imageName);
                ProductImage::create($productImg);
            }
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
        DB::commit();
            return redirect()->route('product.index')->with('success', 'Product created successfully.');

        } catch (\Exception $exception) {
            //echo '<pre>';
            return $exception->getMessage();
            DB::rollBack();
            return back()->with('warning', 'Something error, please try again.');
        }

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

    private function extractImagePathsFromHtml($html)
    {
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $imagePaths = [];
        foreach ($dom->getElementsByTagName('img') as $img) {
            $src = $img->getAttribute('src');
            if (Str::startsWith($src, '/images/products/upload/')) {
                $imagePaths[] = $src;
            }
        }

        return $imagePaths;
    }
    private function fixImagePathsForEditor($html)
    {
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>' . $html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');

            if (Str::startsWith($src, '/images/products/upload/')) {
                $img->setAttribute('src', URL::to($src)); // make it full URL
            }
        }

        return $dom->saveHTML();
    }


}
