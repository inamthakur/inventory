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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');

Route::get('/add-product', function(){

   return view('admin.add-product');

})->middleware('auth');

Route::get('/accounts', function(){

    return view('admin.accounts');
 
 })->middleware('auth');



Route::post('/add-product','productController@store')->middleware('auth');
Route::post('/accounts','accountsController@customer')->middleware('auth');
 
Route::get('/all-products', 'productController@index');
Route::get('/all-accounts', 'accountsController@index');

Route::get('/delete/{id}', 'productController@delete');
Route::get('/delete/{id}', 'accountsController@delete');

Route::get('/edit/{id}', 'productController@edit');

Route::post('/edit', 'productController@update');





