<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ading;
use App\Models\Brand;
use App\Models\MultipleAds;
use App\Models\ProductPromotion;
use App\Models\Slider;
use App\Models\Catalogue;
use Illuminate\Http\Request;

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
        $sideBannerAd = MultipleAds::where('type', 'single_side_banner')
                          ->where('status', 'active')
                          ->first();
        $mainBannerAd = MultipleAds::where('type', 'single_main_banner')
                          ->where('status', 'active')
                          ->first();
        $tripleBannerAd = MultipleAds::where('type', 'triple_banner')
                          ->where('status', 'active')
                          ->first();
        $doubleBannerAd = MultipleAds::where('type', 'double_banner')
                            ->where('status', 'active')
                            ->first();
        return view('frontend.home',compact('sliders', 'featuredCatalogues','promotions','brands','activeVideoAd','activeImageAd','sideBannerAd','mainBannerAd','tripleBannerAd','doubleBannerAd'));
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
