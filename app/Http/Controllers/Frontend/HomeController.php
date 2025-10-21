<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        // This method can be used to return the homepage view
        return view('frontend.home');
    }
    public function shop()
    {
        // This method can be used to return the homepage view
        return view('frontend.shop');
    }
    public function blog()
    {
        // This method can be used to return the homepage view
        return view('frontend.blog');
    }
     public function blogdetails()
    {
        // This method can be used to return the homepage view
        return view('frontend.blogdetails');
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
        return view('frontend.product')->with('product', $product);
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
            return redirect()->back()->with('error', 'An error occurred while processing your request. Please try again.');
        }
    }

    public function contactUs()
    {
        // This method can be used to return the contact us view
        return view('frontend.contact');
    }
}
