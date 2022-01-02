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


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/',function(){
        return view('dashboard');
    });
    Route::get('/dashboard',function(){
        return view('dashboard');
    });
    Route::get('/item','ItemController@index')->name('item.index');
    Route::post('/item','ItemController@create')->name('item.create');
    Route::post('/item/{id}','ItemController@update')->name('item.update');
    Route::get('/item/{id}','ItemController@detail')->name('item.detail');
    Route::delete('/item/{id}','ItemController@delete')->name('item.delete');

    Route::get('/category','ItemCategoryController@index')->name('category.index');
    Route::post('/category','ItemCategoryController@create')->name('category.create');
    Route::post('/category/{id}','ItemCategoryController@update')->name('category.update');
    Route::get('/category/{id}','ItemCategoryController@detail')->name('category.detail');
    Route::delete('/category/{id}','ItemCategoryController@delete')->name('category.delete');

    Route::get('/unit','UnitController@index')->name('unit.index');
    Route::post('/unit','UnitController@create')->name('unit.create');
    Route::post('/unit/{id}','UnitController@update')->name('unit.update');
    Route::get('/unit/{id}','UnitController@detail')->name('unit.detail');
    Route::delete('/unit/{id}','UnitController@delete')->name('unit.delete');

    Route::get('/customer','CustomerController@index')->name('customer.index');
    Route::post('/customer','CustomerController@create')->name('customer.create');
    Route::post('/customer/{id}','CustomerController@update')->name('customer.update');
    Route::get('/customer/{id}','CustomerController@detail')->name('customer.detail');
    Route::delete('/customer/{id}','CustomerController@delete')->name('customer.delete');

    Route::get('/fetch/unit','UnitController@fetch')->name('fetch.unit');
    Route::get('/fetch/category','ItemCategoryController@fetch')->name('fetch.category');
});