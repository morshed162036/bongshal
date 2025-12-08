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
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
>>>>>>> 4c182987ded501b02deec36616d630990b82571f


class ShopController extends Controller
{
<<<<<<< HEAD
public function getModels($companyId)
=======
    public function getModels($companyId)
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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
<<<<<<< HEAD
=======

        $bike = $request->bike_id ? Bike::find($request->bike_id) : null;
        // dd($bike->grade);
        $title = $bike ? $bike->model.' '.$bike->company->name : 'All Products';
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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

<<<<<<< HEAD
        return view('frontend.shop', compact('products','catalogues','catalogue'));
=======
        return view('frontend.shop', compact('products','catalogues','catalogue','bike','title'));
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
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
<<<<<<< HEAD
=======
        $bike = null;
        $title = $catalogue->name;
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
        $catalogues = Catalogue::with('category')->get();

        // Get all category IDs under this catalogue
        $categoryIds = $catalogue->category->pluck('id');

        $products = Product::whereIn('category_id', $categoryIds)->paginate(50);
        // dd($products);
<<<<<<< HEAD
        return view('frontend.shop', compact('products', 'catalogues', 'catalogue'));
=======
        return view('frontend.shop', compact('products', 'catalogues', 'catalogue','bike','title'));
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
    }
    // Products by Category
    public function category(Category $category)
    {
        $catalogues = Catalogue::with('category')->get();

        $products = $category->products()->paginate(12);

        return view('frontend.shop', compact('products', 'catalogues', 'category'));
    }

<<<<<<< HEAD
=======
    // Page search (full results)
    public function search(Request $request)
    {
        $q = trim($request->get('query'));
        // dd($q);

        // 1️⃣ Basic LIKE to fetch a pool of candidates
        $products = Product::when($q, function ($query) use ($q) {
                $query->where('name', 'LIKE', "%{$q}%")
                      ->orWhere('description', 'LIKE', "%{$q}%");
            })
            ->take(100) // small pool for ranking
            ->get();
            // 2️⃣ Optional: PHP fuzzy ranking (levenshtein)
            $products = $products->sortBy(function($p) use ($q) {
                return levenshtein(Str::lower($q), Str::lower($p->name));
            });
            // dd($products);

        return view('frontend.shop', [
            'products' => $products,
            'bike' => null,
            'catalogues' => Catalogue::with('category')->get(),
            'catalogue' => null,
            'title' => 'Search results',
            'q' => $q
        ]);
    }

    // Live AJAX search (top suggestions)
    public function ajaxSearch(Request $request)
    {
        $q = trim($request->get('q'));

        $products = Product::select('id','name','price')
            ->when($q, function ($query) use ($q) {
                $query->where('name', 'LIKE', "%{$q}%");
            })
            ->take(20)
            ->get();

        // Optional fuzzy sort
        $products = $products->sortBy(function($p) use ($q) {
            return levenshtein(Str::lower($q), Str::lower($p->name));
        })->values();

        return response()->json($products);
    }

>>>>>>> 4c182987ded501b02deec36616d630990b82571f
}
