<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
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

Route::get('/category', function(){
    return view('layouts.category');
});

Route::get('items', [ItemController::class, 'getData']);
