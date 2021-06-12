<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/test', function () {
    return view('layouts.test');
});

Route::get('/item', function(){
    return view('layouts.item');
});

Route::get('/category', function(){
    return view('layouts.category');
});
