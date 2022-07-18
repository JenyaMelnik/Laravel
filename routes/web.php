<?php

use App\Http\Controllers\DogController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/categories', [MainController::class, 'categories']);
Route::get('/mobile/iphone_x_64', [MainController::class, 'product']);

Route::get('/dog/name', [DogController::class, 'name']);
Route::get('/dog/age', [DogController::class, 'age']);
Route::get('/dog/type', [DogController::class, 'type']);

//Route::get('/', function () {
//    return view('index');
//});
//
//Route::get('/categories', function () {
//    return view('categories');
//});
//
//Route::get('/mobile/iphone_x_64', function () {
//    return view('product');
//});
