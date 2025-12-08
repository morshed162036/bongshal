<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Ading;
use App\Models\Brand;
use App\Models\ProductPromotion;
use App\Models\Slider;
use App\Models\Catalogue;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 'Active')->orderBy('order', 'asc')->get();
        $featuredCatalogues = Catalogue::where('status', 'active')->get();
        $promotions = ProductPromotion::where('status', 'active')->latest()->take(3)->get();
        $brands = Brand::where('status', 'Active')->orderBy('order', 'asc')->get();
        $activeVideoAd = Ading::where('status', 'active')->where('type', 'video')
                       ->inRandomOrder()->first();
        $activeImageAd = Ading::where('status', 'active')
                       ->where('type', 'image')
                       ->inRandomOrder() // Optional: for variety
                       ->first();
        $products = Product::where('status', 'active')->latest()->take(15)->get();
        $Sideproducts = Product::where('status', 'active')->latest()->skip(1)->take(6)->get();
        return view('frontend.home',compact('sliders', 'featuredCatalogues','promotions','brands','activeVideoAd','activeImageAd','products','Sideproducts'));
    }
    public function shop()
    {
        // This method can be used to return the homepage view
        return view('frontend.shop');
    }
    public function blog()
    {
        // This method can be used to return the homepage view
        $blogCategories = BlogCategory::where('status','active')->get();
        $firstBlog = Blog::latest()->first();
        // dd( $latestBlog->id);
        $blogs = Blog::where('status', 'Published')->orderBy('created_at', 'desc')->get()->skip(1);
        return view('frontend.blog', compact('blogs','blogCategories','firstBlog'));
    }

    public function blogSearch(Request $request)
{
    $searchTerm = $request->input('query');
    $blogCategories = BlogCategory::where('status','active')->get();
    $firstBlog = null;

    $blogs = Blog::where('status', 'Published')
        ->where(function($query) use ($searchTerm) {
            $query->where('title', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
        })
        ->orderBy('created_at', 'desc')
        ->get();

    if ($blogs->isNotEmpty()) {
        $firstBlog = $blogs->shift();
    }

    return view('frontend.blog', compact('blogs','blogCategories','firstBlog'));
}


    public function blogcategory($slug)
    {
        $category = BlogCategory::where('slug', $slug)->first();
        if (!$category) {
            // Handle the case where the category is not found
            abort(404, 'Blog category not found');
        }
        $blogCategories = BlogCategory::where('status','active')->get();
        // This method can be used to return the homepage view
        $firstBlog = Blog::where('category_id', $category->id)->where('status', 'Published')->orderBy('created_at', 'desc')->first();
        $blogs = Blog::where('category_id', $category->id)->where('status', 'Published')->orderBy('created_at', 'desc')->get()->skip(1);
        return view('frontend.blog', compact('blogs','blogCategories','firstBlog'));
    }
     public function blogdetails($slug)
    {
        // This method can be used to return the homepage view
        $blog = Blog::where('slug', $slug)->where('status', 'Published')->first();
        $blogCategories = BlogCategory::where('status','active')->get();
        if (!$blog) {
            // Handle the case where the blog post is not found
            abort(404, 'Blog post not found');
        }
        // Increment the views count
        $blog->increment('views');
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
        ->where('id', '!=', $blog->id)
        ->latest()
        ->limit(4)
        ->get();
        return view('frontend.blogdetails', compact('blog', 'relatedBlogs','blogCategories'));
    }
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if (!$product) {
            // Handle the case where the product is not found
            abort(404, 'Product not found');
        }
        // foreach($product->attributes as $attr){
        //     // Accessing the attribute and its values
        //     $attributeName = $attr->attribute->name;
        //     $attributeValue = $attr->attributeValue->value;
        //     // You can perform any additional logic here if needed
        // }
        // print_r($product->attributes->toArray());
        // dd($product->attributes[0]->attribute->values[0]->value);
        // This method can be used to return the homepage view
        $catalogue = optional($product->category)->catalogue;
        $relatedProducts = Product::whereHas('category', function ($q) use ($catalogue) {
            $q->where('catalogue_id', $catalogue->id);
        })
        ->where('id', '!=', $product->id)
        ->latest()
        ->take(10)
        ->get();
        $likeProducts = Product::where('category_id', $product->category_id)
        ->where('id', '!=', $product->id)
        ->latest()
        ->limit(10)
        ->get();

        return view('frontend.product')->with('product', $product)
                                      ->with('relatedProducts', $relatedProducts)
                                      ->with('likeProducts', $likeProducts);
    }
    public function cart()
    {
        // This method can be used to return the homepage view
        return view('frontend.cart');
    }
    public function vendorRegistration()
    {
        // This method can be used to return the vendor registration view
        return view('frontend.vendor_registration');
    }
    public function vendorRegistrationStore(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:vendors,email',
            'phone' => 'required|string|max:20',
            'wechat' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
            'website' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request->all());
        // Create a new vendor record
        // Create a user for the vendor
        if (
        User::where('email', $request->email)->exists() ||
        Vendor::where('email', $request->email)->exists()
    ) {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Email already exists. Please use another email.');
    }
        DB::beginTransaction();
        try {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Default password, should be changed later
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
        $vendor->created_by = $user->id; // Assuming the user is logged in
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/vendors'), $imageName);
            $vendor->image = 'images/vendors/' . $imageName;
        }
        $vendor->save();

        DB::commit();
        return redirect()->back()->with('success', 'Vendor registration successful. Your account is pending approval.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error','An error occurred while processing your request. Please try again.');
        }
    }

    public function contactUs()
    {
        // This method can be used to return the contact us view
        return view('frontend.contact');
    }
}
