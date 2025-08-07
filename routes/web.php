<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
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
Route::get('/shop', [HomeController::class, 'shop'])->name('shoppage');
Route::get('/product', [HomeController::class, 'product'])->name('productpage');
Route::prefix('/')->group(function(){
    Route::match(['get', 'post'], 'login',[AdminController::class,'login'])->name('admin.login');
    Route::group(['middleware'=>['user']],function(){
        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        Route::match(['get', 'post'], 'settings/update', [AdminController::class,'settingsUpdate'])->name('settings.update');
        // Route::resource('brand', BrandController::class);
        // Route::resource('category', CategoryController::class);
        // Route::resource('service', ServiceController::class);
        // Route::resource('blog', BlogController::class);
        // Route::resource('blog_category', BlogCategoryController::class);
        // Route::resource('order', OrderController::class);
    });
});
