<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes 	id 	item_brand 	item_model 	item_chipset 	item_price 	item_available_unit 	item_rating 	item_warranty 	item_desc 	storeID 	categoryID
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'view']);

Route::get('/about-us', function() {
    return view('layouts.about');
});

Route::get('/test', function () {
    return view('layouts.test');
});

/*Route::get('/item', function(){
    return view('layouts.item');
});*/

Route::get('item/{id}', [ItemController::class, 'getData']);



Route::get('items', [ItemController::class, 'getData']);

Route::get('/category', function () {
    $category = DB::table('categories')->get();
    return view('layouts.category', ['categories' => $category]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
