<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\VendorProduct;
use App\Models\Category;
use App\Models\Catalogue;
use App\Models\Brand;
use App\Models\Attribute;
use App\Models\Bike;
use App\Models\Unit;
use App\Models\Tag;
use App\Models\User;
use App\Models\CommissionChart;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('backend.vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:vendors,email',
            'phone' => 'required|string|max:20',
            'wechat' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
            'website' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create a user for the vendor
        DB::beginTransaction();
        try {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->email); // Default password, should be changed later
        $user->text_password = $user->password ; // Default password, should be changed later
        $user->role = 'vendor';
        $user->	is_active = '0';
        $user->save();
        // dd($user);
        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->wechat = $request->wechat;
        $vendor->address = $request->address;
        $vendor->website = $request->website;
        $vendor->status = 'pending'; // Default status
        $vendor->purchase_amount = 0; // Default value
        $vendor->get_amount = 0; // Default value
        $vendor->current_due = 0; // Default value
        $vendor->user_id = $user->id; // Assuming the user is logged in
        $vendor->created_by = auth()->id(); // Assuming the user is logged in

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/vendors'), $imageName);
            $vendor->image = 'images/vendors/' . $imageName;
        }

        $vendor->save();

        DB::commit();
        return redirect()->route('vendor.index')->with('success', 'Vendor created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while creating the vendor. Please try again.']);
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
        $vendor = Vendor::findorFail($id);
        return view('backend.vendor.edit')->with(compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
        $vendor = Vendor::findorFail($id);

        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->wechat = $request->wechat;
        $vendor->address = $request->address;
        $vendor->website = $request->website;
        $vendor->updated_by = auth()->id(); // Assuming the user is logged in

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($vendor->image && file_exists(public_path($vendor->image))) {
                unlink(public_path($vendor->image));
            }

        // Upload new image
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/vendors'), $imageName);
        $vendor->image = 'images/vendors/' . $imageName;
        }

        $vendor->update();

        $user = User::findorFail($vendor->user_id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();
        DB::commit();
        return redirect()->route('vendor.index')->with('success', 'Vendor update successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while creating the vendor. Please try again.']);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function vendorApproval()
    {
        $vendors = Vendor::where('status', 'pending')->get();
        return view('backend.vendor.approval', compact('vendors'));
    }

    public function approveVendor($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = 'active';
        $vendor->save();

        $user = User::findOrFail($vendor->user_id);
        $user->is_active = '1';
        $user->save();

        return redirect()->back()->with('success', 'Vendor approved successfully.');
    }
    public function rejectVendor($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = 'rejected';
        $vendor->save();

        $user = User::findOrFail($vendor->user_id);
        $user->is_active = '0';
        $user->save();

        return redirect()->back()->with('success', 'Vendor rejected successfully.');
    }

    public function viewVendor($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('backend.vendor.view', compact('vendor'));
    }


    public function addProduct()
    {
        // dd('here');
        $products = Product::where('status', 'Active')->get();
        return view('backend.vendor.product.addproduct', compact('products'));
    }

    public function addProductStore(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'product_name' => 'required|exists:products,id',
        //     'stock' => 'required|integer|min:0',
        //     'price' => 'required|numeric|min:0',
        // ]);

         foreach ($request['group-product'] as $index => $product) {
            if (!empty($product['product_name'])) {
                $vendorProduct = new VendorProduct();
                $vendorProduct->vendor_id = auth()->user()->id;
                $vendorProduct->product_id = $product['product_name'];
                $vendorProduct->quantity = $product['stock'];
                $vendorProduct->price = $product['price'];
                $vendorProduct->created_by = auth()->id();
                $vendorProduct->status = 'Approved';
                $vendorProduct->save();
            }
        }
        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function addProductAmount(Request $request, $id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->purchase_amount += $request->amount;
        $vendor->current_due += $request->amount;
        $vendor->save();

        return redirect()->back()->with('success', 'Purchase amount added successfully.');
    }

    public function vendorProducts(Request $request)
    {
        // dd('here');
        // $products = VendorProduct::where('vendor_id', auth()->user()->id)->get();
        $products = Product::where('vendor_id', auth()->user()->id)->get();
        // return view('backend.vendor.product.vendor_productlist', compact('products'));
        return view('backend.vendor.product.index', compact('products'));
    }

    public function createProduct()
    {
        $catalogues = \App\Models\Catalogue::with('category')->where('status','active')->get();
        $categories = \App\Models\Category::where(['status'=>'active'])->get();
        $brands = \App\Models\Brand::where('status','active')->get();
        $attributes = \App\Models\Attribute::where('status','active')->get();
        $bikes = \App\Models\Bike::where('status','active')->get();
        $units = \App\Models\Unit::where('status','active')->get();
        $tags = \App\Models\Tag::where('status','active')->get();
        // $products = Product::where('status', 'Active')->get();
        return view('backend.vendor.product.create', compact('catalogues','categories','brands','attributes','bikes','units','tags'));
    }
    public function vendorProductStore(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            // 'brand_id'          => 'required|exists:brands,id',
            // 'bike_id'           => 'required|exists:bikes,id',
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
        // $bike_model = \App\Models\Bike::find($request->bike_id)->model;

        $name = $brand_name?$brand_name->name.' ' :''.$series.$request->traditional_name.' ' . $request->commercial_name.' '.$request->part_number;
        // .' '.$bike_model;

        DB::beginTransaction();
        try {

        // Create product
        $product = new Product();
        $product->name = $name;
        $product->vendor_id = auth()->user()->id;
        $product->slug = \Str::slug($name);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->bike_id = $request->bike_id;
        $product->series = $request->series;
        $product->traditional_name = $request->traditional_name;
        $product->commercial_name = $request->commercial_name;
        $product->parts_number = $request->part_number;
        $product->unit_id = $request->unit;
        // $product->unit_price = $request->unit_price;
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
        $product->status = 'pending';

        $product->grade = $request->grade;
        $product->engine_oil_type = $request->engine_oil_type;
        // $product->engine_oil_capacity = $request->engine_oil_capacity;
        $product->quantity = $request->quantity;
        $product->width = $request->width;
        $product->aspect_ratio = $request->aspect_ratio;
        $product->rim = $request->rim;
        $product->created_by = auth()->user()->id;

        $commission = CommissionChart::where('is_active', 'active')
        ->where('catalogue_id', $request->catalogue_id)
        ->where('down_threshold_amount', '<=', (int)$request->purchase_price)
        ->where('up_threshold_amount', '>=', (int)$request->purchase_price)
        ->first();
        // dd($commission);
        if ($commission) {
            $commissionRate = $commission->commission_rate;
            $newUnitPrice = $request->purchase_price + (($commissionRate / 100) * $request->purchase_price);
            $product->unit_price = number_format($newUnitPrice, 2, '.', '') ;
        } else {
            // If no commission chart matches, set price as purchase price
            $product->unit_price = $request->purchase_price;
        }

        if($request->has('tag')){
            $product->tag_id = implode(',', $request->tag);
        }
        if($request->has('bike_id')){
            $product->bike_id = implode(',', $request->bike_id);
        }

        // $product->features = $request->features;

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
            return redirect()->route('vendor.viewProducts')->with('success', 'Product created successfully.');

        } catch (\Exception $exception) {
            //echo '<pre>';
            return $exception->getMessage();
            DB::rollBack();
            return back()->with('warning', 'Something error, please try again.');
        }

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


    public function orderList()
    {
        // $orders = Order::where('vendor_id', auth()->user()->id)->get();
        return view('backend.vendor.order.order_list');
    }

    public function vendorProfile()
    {
        return view('backend.vendor.profile');
    }

    public function vendorProductList()
    {
        $products = Product::where('vendor_id','!=',null)->get();
        return view('backend.vendor.product.vendor_productlist', compact('products'));
    }

    public function productApprovalList()
    {
        $products = Product::where('vendor_id','!=',null)->where('status','pending')->get();
        return view('backend.vendor.product.product_approval', compact('products'));
    }

    public function updateVendorStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'active') {
                $status = 'inactive';
            }
            else{
                $status = 'active';
            }
            Vendor::where('id',$data['product_type'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_type'=> $data['product_type']]);
        }
    }
}
