<?php

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
Auth::routes();

Route::get('/profil', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'ProductController@mainIndex')->name('main');
Route::get('/produkty','ProductController@index')->name('products');
Route::get('/produkt/{id}-{name}','ProductController@details')->name('product_detail');

// Cart routes
Route::get("/koszyk", "CartController@index")->name('cart.index');
Route::post("/koszyk", "CartController@store")->name('cart.store');
Route::put("/koszyk/{id}", "CartController@update")->name('cart.update');
Route::delete("/koszyk/usun/{id}", "CartController@destroy")->name('cart.destroy');