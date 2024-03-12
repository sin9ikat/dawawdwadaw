<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('orders', \App\Http\Controllers\OrderController::class);
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('roles', \App\Http\Controllers\RoleController::class);
Route::resource('order-products', \App\Http\Controllers\OrderProductController::class);

Route::get('korzina',function ()
{
    return view('korzina');
})->name('dd');

Route::get('katalog',function ()
{
    return view('katalog');
})->name('katalog');

Route::get('kartochka',function ()
{
    return view('kartohka');
})->name('kartochka');
