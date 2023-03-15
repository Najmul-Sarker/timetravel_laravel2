<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;

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
//     return view('welcome');
// });

//admin routes


Route::get('/admin/users',function(){
    return view('backend.table');
});
// Route::get('/frontend/home',function(){
//     return view('frontend.dashboard');
// });
// Route::get('/frontend/shop',function(){
//     return view('frontend.shop.shop_details');
// });
Route::get('/', [FrontendController::class,'index'])->name('frontend.index');
Route::get('/frontend/shop/{product}', [FrontendController::class,'shop'])->name('frontend.shop');

//route for dashboard
Route::get('/admin', [HomeController::class,'index'])->name('dashboard');

//routes for category
Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function(){

    Route:: get('/','index')->name('index');
    Route:: get('/show/{category}','show')->name('show');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{category}','edit')->name('edit');
    Route:: post('/update/{category}','update')->name('update');
    Route:: delete('/delete/{category}','delete')->name('delete');

});

//routes for products
Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function(){

    Route:: get('/','index')->name('index');
    Route:: get('/show/{product}','show')->name('show');
    Route:: get('/create','create')->name('create');
    Route:: post('/store','store')->name('store');
    Route:: get('/edit/{product}','edit')->name('edit');
    Route:: post('/update/{product}','update')->name('update');
    Route:: delete('/delete/{product}','delete')->name('delete');

});



