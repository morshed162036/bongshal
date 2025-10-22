<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 'Active')->orderBy('order', 'asc')->get();
        return view('frontend.home',compact('sliders'));
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
    public function product()
    {
        // This method can be used to return the homepage view
        return view('frontend.product');
    }
    public function cart()
    {
        // This method can be used to return the homepage view
        return view('frontend.cart');
    }
}
