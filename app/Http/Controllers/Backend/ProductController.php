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
<<<<<<< HEAD
=======
        // dd($request->all());
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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


<<<<<<< HEAD
// dd($request->all());
=======
        // dd($request->all());
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
        $brand_name = \App\Models\Brand::find($request->brand_id);
        $series = $request->series?$request->series.', ':'';
        $category_name = \App\Models\Category::find($request->category_id)->name;
        // $bike_model = \App\Models\Bike::find($request->bike_id)->get();
        // dd($bike_model);
        $bike_model = \App\Models\Bike::find($request->bike_id)->model;

<<<<<<< HEAD
        $name = $brand_name?$brand_name->name.', ':''.$series.$request->traditional_name.', '.$request->commercial_name.', '.$request->part_number.', '.$bike_model;
=======
        $name = $brand_name?$brand_name->name.' ' :''.$series.$request->traditional_name.' ' . $request->commercial_name.' '.$request->part_number.' '.$bike_model;
>>>>>>> 4c182987ded501b02deec36616d630990b82571f

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

<<<<<<< HEAD
=======
        $product->grade = $request->grade;
        $product->engine_oil_type = $request->engine_oil_type;
        // $product->engine_oil_capacity = $request->engine_oil_capacity;
        $product->quantity = $request->quantity;
        $product->width = $request->width;
        $product->aspect_ratio = $request->aspect_ratio;
        $product->rim = $request->rim;
        // $product->features = $request->features;

>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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

<<<<<<< HEAD
         // Handle file upload for the image
=======
        // Handle file upload for the image
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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
<<<<<<< HEAD
        //
=======
        $product = Product::with('images','attributes')->find($id);
        // dd($product->toArray());
        $catalogues = \App\Models\Catalogue::with('category')->where('status','active')->get();
        $categories = \App\Models\Category::where(['status'=>'active'])->get();
        $brands = \App\Models\Brand::where('status','active')->get();
        $attributes = \App\Models\Attribute::where('status','active')->get();
        $bikes = \App\Models\Bike::where('status','active')->get();
        return view('backend.product.edit',compact('product','catalogues','categories','brands','attributes','bikes'));
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
    {
        //
    }
=======
    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);


    $request->validate([
        'category_id'       => 'required|exists:categories,id',
        'bike_id'           => 'required|exists:bikes,id',
        'traditional_name'  => 'nullable|string|max:255',
        'commercial_name'   => 'nullable|string|max:255',
        'part_number'       => 'nullable|string|max:255',
        'unit'              => 'required|string|max:50',
        'unit_price'        => 'numeric',
        'image'             => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'multi_image.*'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'size_chart'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'meta_image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);
    // dd($product->toArray());

    DB::beginTransaction();
    try {
        // Build product name
        $brand_name = \App\Models\Brand::find($request->brand_id);
        $series = $request->series ? $request->series . ', ' : '';
        $category_name = \App\Models\Category::find($request->category_id)->name;
        $bike_model = \App\Models\Bike::find($request->bike_id)->model;

        $name = ($brand_name ? $brand_name->name . ' ' : '') .
                $series . $request->traditional_name . ' ' .
                $request->commercial_name . ' ' .
                $request->part_number . ' ' . $bike_model;

        // Update product fields
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
        $product->alert_quantity = $request->alert_quantity ?? 0;
        $product->weight = $request->weight;
        $product->video = $request->youtube_video;
        $product->sku = $request->sku ?: $product->sku; // keep old if not provided
        $product->is_oem = $request->is_oem;
        $product->is_preorder = $request->is_preorder;
        $product->shipping_time = $request->shipping_time;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->grade = $request->grade;
        $product->engine_oil_type = $request->engine_oil_type;
        $product->quantity = $request->quantity;
        $product->width = $request->width;
        $product->aspect_ratio = $request->aspect_ratio;
        $product->rim = $request->rim;

        //  Handle base64 images in description
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
                $img->setAttribute('src', $imageName);
            }
        }
        $product->description = $dom->saveHTML();

        //  Replace image if uploaded
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('images/products/image/' . $product->image))) {
                unlink(public_path('images/products/image/' . $product->image));
            }
            $file = $request->file('image');
            $Imagename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/image'), $Imagename);
            $product->image = $Imagename;
        }

        //  Replace size chart if uploaded
        if ($request->hasFile('size_chart')) {
            if ($product->size_chart && file_exists(public_path('images/products/size_chart/' . $product->size_chart))) {
                unlink(public_path('images/products/size_chart/' . $product->size_chart));
            }
            $file = $request->file('size_chart');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/size_chart'), $filename);
            $product->size_chart = $filename;
        }

        //  Replace meta image if uploaded
        if ($request->hasFile('meta_image')) {
            if ($product->meta_image && file_exists(public_path('images/products/meta/' . $product->meta_image))) {
                unlink(public_path('images/products/meta/' . $product->meta_image));
            }
            $file = $request->file('meta_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products/meta'), $filename);
            $product->meta_image = $filename;
        }

        $product->update();

        //  Handle multiple images (add new ones)
        if ($request->hasFile("multi_image")) {
            foreach ($request->file("multi_image") as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/products/multi'), $imageName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image'      => $imageName,
                ]);
            }
        }

        //  Handle attributes (pivot update)
        $product->attributes()->delete();

        if ($request->attribute_id && $request->value_id) {
            foreach ($request->attribute_id as $key => $attrId) {
                if (!empty($attrId) && !empty($request->value_id[$key])) {
                    ProductAttribute::create([
                        'product_id'   => $product->id,
                        'attribute_id' => $attrId,
                        'value_id'     => $request->value_id[$key],
                    ]);
                }
            }
        }

        DB::commit();
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');

    } catch (\Exception $exception) {
        DB::rollBack();
        return back()->with('error', 'Error: ' . $exception->getMessage());
    }
}

>>>>>>> 4c182987ded501b02deec36616d630990b82571f

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
    {
        //
    }
=======
    public function destroy($id)
{
    DB::beginTransaction();

    try {
        $product = Product::with('images', 'attributes')->findOrFail($id);

        // Delete single main image
        if ($product->image && file_exists(public_path('images/products/image/' . $product->image))) {
            unlink(public_path('images/products/image/' . $product->image));
        }

        // Delete size chart
        if ($product->size_chart && file_exists(public_path('images/products/size_chart/' . $product->size_chart))) {
            unlink(public_path('images/products/size_chart/' . $product->size_chart));
        }

        // Delete meta image
        if ($product->meta_image && file_exists(public_path('images/products/meta/' . $product->meta_image))) {
            unlink(public_path('images/products/meta/' . $product->meta_image));
        }

        // Delete multiple images
        if ($product->images && count($product->images)) {
            foreach ($product->images as $multi) {
                if ($multi->image && file_exists(public_path('images/products/multi/' . $multi->image))) {
                    unlink(public_path('images/products/multi/' . $multi->image));
                }
                $multi->delete();
            }
        }

        // Delete description embedded images (optional cleanup)
        $description = $product->description;
        if ($description) {
            preg_match_all('/<img[^>]+src="([^">]+)"/', $description, $matches);
            if (!empty($matches[1])) {
                foreach ($matches[1] as $src) {
                    $path = public_path($src);
                    if (file_exists($path) && str_contains($src, '/images/products/upload/')) {
                        unlink($path);
                    }
                }
            }
        }

        // Delete attributes
        $product->attributes()->delete();

        // Finally delete product record
        $product->delete();

        DB::commit();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', 'Error deleting product: ' . $e->getMessage());
    }
}

>>>>>>> 4c182987ded501b02deec36616d630990b82571f

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

<<<<<<< HEAD
=======
    public function getCategoriesWithSubcategories($catalogue_id)
    {

        // Make sure $catalogue_id exists in the catalogues table
    $categories = \App\Models\Category::where('catalogue_id', $catalogue_id) // filter by catalogue_id
        ->where('status', 'active')
        ->with('subcategories') // eager load subcategories
        ->get(); // include catalogue_id for filtering
        return response()->json($categories);
    }

>>>>>>> 4c182987ded501b02deec36616d630990b82571f

}
