<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // This method can be used to return the homepage view
        return view('frontend.home');
    }
    public function shoppage()
    {
        // This method can be used to return the homepage view
        return view('frontend.shop');
    }
    public function product()
    {
        // This method can be used to return the homepage view
        return view('frontend.product');
    }
}
