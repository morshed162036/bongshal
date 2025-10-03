<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

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
}
