<?php

use App\Http\Controllers\Backend\AdingController;
use App\Http\Controllers\Backend\MultipleAdsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CatalogueController;
use App\Http\Controllers\Backend\BikeController;
use App\Http\Controllers\Backend\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\Backend\ProductPromotionController;



=======
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\AdingController;
use App\Http\Controllers\Backend\ProductPromotionController;


>>>>>>> 4c182987ded501b02deec36616d630990b82571f
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return redirect('login');
// });

Route::get('/', [HomeController::class, 'index'])->name('homepage');
// Route::get('/shop', [HomeController::class, 'shop'])->name('shoppage');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/catalogue/{catalogue:id}', [ShopController::class, 'catalogue'])->name('shop.catalogue');
Route::get('/shop/category/{category:slug}', [ShopController::class, 'category'])->name('shop.category');

<<<<<<< HEAD
=======
// routes/web.php
Route::get('/search', [ShopController::class, 'search']);
Route::get('/search-ajax', [ShopController::class, 'ajaxSearch']);
>>>>>>> 4c182987ded501b02deec36616d630990b82571f


// Ajax routes for dynamic dropdowns in the shop page popup filters
Route::get('/get-models/{companyId}', [ShopController::class, 'getModels']);
Route::get('/get-colors/{bikeId}', [ShopController::class, 'getColors']);
Route::get('/get-products', [ShopController::class, 'getProducts'])->name('shop.products');

<<<<<<< HEAD
Route::get('/product', [HomeController::class, 'product'])->name('productpage');
=======
Route::get('/product-details/{slug}', [HomeController::class, 'product'])->name('productpage');
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
Route::get('/blog', [HomeController::class, 'blog'])->name('blogpage');
Route::get('/blog-details', [HomeController::class, 'blogdetails'])->name('blogdetailspage');
Route::get('/cart', [HomeController::class, 'cart'])->name('cartpage');

Route::get('/vendor-registration', [HomeController::class, 'vendorRegistration'])->name('vendor.registration');
Route::post('/vendor-registration', [HomeController::class, 'vendorRegistrationStore'])->name('vendor.registration.store');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');
Route::post('/contact-us', [HomeController::class, 'contactUsStore'])->name('contact.submit');
Route::prefix('/')->group(function(){
    Route::match(['get', 'post'], 'login',[AdminController::class,'login'])->name('admin.login');
    Route::group(['middleware'=>['user']],function(){
        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::match(['get', 'post'], 'settings/update', [AdminController::class,'settingsUpdate'])->name('settings.update');
        Route::match(['get', 'post'], 'brand/{id?}',[SettingsController::class,'brand'])->name('brand');
        Route::match(['get', 'post'], 'company/{id?}',[SettingsController::class,'company'])->name('company');
        Route::match(['get', 'post'], 'attribute/{id?}',[SettingsController::class,'productAttribute'])->name('product.attribute');
        Route::match(['get', 'post'], 'attribute-value/{id?}',[SettingsController::class,'productAttributeValue'])->name('product.attributeValue');
        Route::match(['get', 'post'], 'slider/{id?}',[SettingsController::class,'slider'])->name('slider');
        Route::match(['get', 'post'], 'blog-category/{id?}',[BlogController::class,'blogCategory'])->name('blog-category');
        Route::resource('blog', BlogController::class);
        Route::post('update-blog-status',[BlogController::class,'updateBlogStatus'])->name('updateBlogStatus');
        Route::resource('category', CategoryController::class);
        Route::get('append-categories-level',[CategoryController::class,'appendCategoryLevel'])->name('appendCategory');
        Route::post('update-category-status',[CategoryController::class,'updateCategoryStatus'])->name('updateCategoryStatus');
        Route::resource('catalogue', CatalogueController::class);
<<<<<<< HEAD
=======

        Route::resource('vendor', VendorController::class);
        Route::post('vendor/store', [VendorController::class,'store'])->name('vendor.store');

        Route::get('vendor-approval', [VendorController::class,'vendorApproval'])->name('vendorApproval');
        Route::get('vendor/approve/{id}', [VendorController::class,'approveVendor'])->name('approveVendor');
        Route::get('vendor/reject/{id}', [VendorController::class,'rejectVendor'])->name('rejectVendor');
        Route::post('update-vendor-status',[VendorController::class,'updateVendorStatus'])->name('updateVendorStatus');


>>>>>>> 4c182987ded501b02deec36616d630990b82571f
        Route::post('update-catalogue-status',[CatalogueController::class,'updateCatalogueStatus'])->name('updateCatalogueStatus');
        Route::resource('bike', BikeController::class);
        Route::post('update-bike-status',[BikeController::class,'updateBikeStatus'])->name('updateBikeStatus');
        // Route::match(['get', 'post'], 'product/{id
        Route::resource('product', ProductController::class);
<<<<<<< HEAD
        // web.php
        Route::get('/attributes/{attribute}/values', [ProductController::class, 'values'])
    ->name('attributes.values');
=======
        Route::get('/attributes/{attribute}/values', [ProductController::class, 'values'])->name('attributes.values');
        Route::get('/get-categories-subcategories/{catalogue_id}', [ProductController::class, 'getCategoriesWithSubcategories']);

>>>>>>> 4c182987ded501b02deec36616d630990b82571f

        // Route::post('update-product-status',[ProductController::class,'updateProductStatus'])->name('updateProductStatus');
        // Route::resource('coupon', CouponController::class);
        // Route::resource('service', ServiceController::class);
        // Route::resource('blog_category', BlogCategoryController::class);
        // Route::resource('order', OrderController::class);
<<<<<<< HEAD
        Route::resource('promotions', ProductPromotionController::class);
        Route::resource('ading', AdingController::class);
        Route::resource('ads', MultipleAdsController::class);
=======

        Route::resource('promotions', ProductPromotionController::class);
        Route::resource('ading', AdingController::class);
>>>>>>> 4c182987ded501b02deec36616d630990b82571f
    });
});
