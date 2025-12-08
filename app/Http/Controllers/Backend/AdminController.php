<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Setting;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\VendorProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Catalogue;
use App\Models\Bike;
use App\Models\Unit;
use App\Models\Tag;
use App\Models\Attribute;
use App\Models\ProductPromotion;
use App\Models\CommissionChart;
use App\Models\Product;

use Illuminate\Support\Facades\File;
// Uncomment the following lines if you have these models
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Admin::get();
        // dd( $users);
        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            // 'password' => 'required|string|min:6|confirmed',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        // $user->phone = $data['phone'] ?? null;
        // $user->address = $data['address'] ?? null;
        $user->role = $data['role']; // Default role
        $user->is_active = '1'; // Default status
        // $user->created_by = Auth::id();
        $user->save();

        $admin = new Admin();
        $admin->user_id = $user->id;
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->password = Hash::make($data['password']);
        $admin->phone = $data['phone'] ?? null;
        $admin->address = $data['address'] ?? null;
        $admin->created_by = Auth::id();
        // $admin->updated_by = Auth::id();


       if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/admin'), $imageName);
            $admin->image = 'images/admin/' . $imageName;
        }
        $admin->save();

        return redirect()->route('admin.userlist')->with('success', 'User created successfully!');
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
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $validate = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'admin'])){
                return redirect('dashboard');
                }
            elseif(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'vendor','is_active'=>'1'])){
                return redirect('dashboard');
                }
            elseif(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'executive','is_active'=>'1'])){
                return redirect('dashboard');
                }
            else{
                return redirect()->back()->with('error','Invalid Email or Password');
            }
        }
        return view('backend.login');
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function dashboard(){
        // $new = Order::where('status','Create')->get()->count();
        // $complete = Order::where('status','Complete')->get()->count();
        // $pending = Order::where('status','Pending')->get()->count();
        // $service = Service::get()->count();
        // $category = Blog_category::get()->count();
        // $blog = Blog_post::get()->count();
        // return view('server.dashboard')->with(compact('new','complete','pending','service','category','blog'));
        return view('backend.dashboard');
    }
//     public function edit()
// {
//     $setting = Setting::first(); // Assuming only one settings row
//     return view('settings.edit', compact('setting'));
// }

public function settingsUpdate(Request $request)
{
    $setting = Setting::first();

    if($request->isMethod('post')) {

        $data = $request->only([
            'site_name', 'email', 'phone', 'address',
            'meta_description', 'meta_keywords', 'meta_title', 'copyright',
            'social_facebook', 'google_analytics_code', 'facebook_pixel_code',
            'social_linkedin', 'social_twitter', 'social_instagram', 'social_youtube',
            'short_about', 'whatsapp'
        ]);

        // if($request->hasFile('logo')){

        //     //First Delete old logo
        //     if(file_exists(public_path($setting->logo))){
        //         unlink(public_path($setting->logo));
        //     }

        //     $file = $request->file('logo');
        //     $path = 'images';
        //     $file_name = 'logo'.'.'.$file->getClientOriginalExtension();
        //     $file->move(public_path($path),$file_name);     //Upload new logo
        //     $data['logo'] = $path.'/'.$file_name;

        // }
        //  if($request->hasFile('fevicon')){

        //     //First Delete old logo
        //     if(file_exists(public_path($setting->fevicon))){
        //         unlink(public_path($setting->fevicon));
        //     }

        //     $file = $request->file('fevicon');
        //     $path = 'images';
        //     $file_name = 'fevicon'.'.'.$file->getClientOriginalExtension();
        //     $file->move(public_path($path),$file_name);     //Upload new logo
        //     $data['fevicon'] = $path.'/'.$file_name;

        // }

        if($request->hasFile('logo')){
                $exists = 'images/setting/'.$setting->logo;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('logo');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'_logo.'.$extension;
                    $imagePath = 'images/setting';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $setting->logo = $imageName;
                }
            }
            if($request->hasFile('favicon')){
                $exists = 'images/setting/'.$setting->favicon;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('favicon');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'_favicon.'.$extension;
                    $imagePath = 'images/setting';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $setting->favicon = $imageName;
                }
            }
            if($request->hasFile('sos_banner')){
                $exists = 'images/setting/'.$setting->sos_banner;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('sos_banner');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'_sos_banner.'.$extension;
                    $imagePath = 'images/setting';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $setting->sos_banner = $imageName;
                }
            }
        $setting->update($data);

        return redirect()->back()->with('success', 'Settings updated!');
    } else {
        return view('backend.settings')->with('company', $setting);
    }
}

public function executiveCreateProduct()
{
    $catalogues = \App\Models\Catalogue::with('category')->where('status','active')->get();
    $categories = \App\Models\Category::where(['status'=>'active'])->get();
    $brands = \App\Models\Brand::where('status','active')->get();
    $attributes = \App\Models\Attribute::where('status','active')->get();
    $bikes = \App\Models\Bike::where('status','active')->get();
    $units = \App\Models\Unit::where('status','active')->get();
    $tags = \App\Models\Tag::where('status','active')->get();
    $vendors = \App\Models\Vendor::where('status','active')->get();

    return view('backend.executive.product_create')->with(compact('catalogues','categories','brands','attributes','bikes','units','tags','vendors'));
}
public function executiveVendorList()
    {
        $vendors = Vendor::with(['createdBy', 'updatedBy'])->get();
        return view('backend.executive.vendor_list', compact('vendors'));
    }

public function executiveStoreProduct(Request $request)
    {
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
        $product->vendor_id = $request->vendor_id;
        $product->slug = \Str::slug($name);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->bike_id = $request->bike_id;
        $product->series = $request->series;
        $product->traditional_name = $request->traditional_name;
        $product->commercial_name = $request->commercial_name;
        $product->parts_number = $request->part_number;
        $product->unit_id = $request->unit;
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
        $product->status = 'pending';

        $product->grade = $request->grade;
        $product->engine_oil_type = $request->engine_oil_type;
        // $product->engine_oil_capacity = $request->engine_oil_capacity;
        $product->quantity = $request->quantity;
        $product->width = $request->width;
        $product->aspect_ratio = $request->aspect_ratio;
        $product->rim = $request->rim;
        $product->created_by = auth()->user()->id;
        $product->applied_by = auth()->user()->id;

        $commission = CommissionChart::where('is_active', 'active')
        ->where('catalogue_id', $request->catalogue_id)
        ->where('down_threshold_amount', '<=', (int)$request->purchase_price)
        ->where('up_threshold_amount', '>=', (int)$request->purchase_price)
        ->first();
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
            return redirect()->route('executive.createProduct')->with('success', 'Product created successfully.');

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

}
