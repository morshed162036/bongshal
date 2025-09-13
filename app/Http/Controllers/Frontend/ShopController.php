<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Product;
use App\Models\Category;
use App\Models\Bike;
use App\Models\BikeColor;
use Illuminate\Pagination\Paginator;
use App\Models\Company;


class ShopController extends Controller
{
public function getModels($companyId)
    {
        // dd($companyId);
        $models = Bike::where('company_id', $companyId)->get();
        return response()->json($models);
    }

    public function getColors($bikeId)
    {
        $colors = BikeColor::where('bike_id', $bikeId)->get();
        return response()->json($colors);
    }

    public function getProducts(Request $request)
    {
        $catalogues = Catalogue::with('category')->get();
        $catalogue=$request->catalogue_id ? Catalogue::find($request->catalogue_id) : null;
        // dd($request->all());
        $query = Product::query();

        // if ($request->company_id) {
        //     $bikeIds = Bike::where('company_id', $request->company_id)->pluck('id');
        //     $query->whereIn('bike_id', $bikeIds);
        // }
        // dd($query->get());

        if ($request->bike_id) {
            $query->where('bike_id', $request->bike_id);
        }

        if ($request->catalogue_id) {
            $categoryIds = $catalogue->category->pluck('id');
            $query->whereIn('category_id', $categoryIds);
        }
        // if ($request->color_id) {
        //     $query->where('color_id', $request->color_id);
        // }

        $products = $query->get();

        return view('frontend.shop', compact('products','catalogues','catalogue'));
    }

    // All products
    public function index()
    {
        $catalogues = Catalogue::with('category')->get();
        $products   = Product::paginate(12);

        return view('frontend.shop', compact('products', 'catalogues'));
    }

    // Products by Catalogue
    public function catalogue(Catalogue $catalogue)
    {
        $catalogues = Catalogue::with('category')->get();

        // Get all category IDs under this catalogue
        $categoryIds = $catalogue->category->pluck('id');

        $products = Product::whereIn('category_id', $categoryIds)->paginate(50);
        // dd($products);
        return view('frontend.shop', compact('products', 'catalogues', 'catalogue'));
    }
    // Products by Category
    public function category(Category $category)
    {
        $catalogues = Catalogue::with('category')->get();

        $products = $category->products()->paginate(12);

        return view('frontend.shop', compact('products', 'catalogues', 'category'));
    }

}
