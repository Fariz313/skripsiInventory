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
    Route::get('/','ItemController@index');
    Route::get('/dashboard','ItemController@index' );
    
    Route::get('/item','ItemController@index')->name('item.index');
    Route::post('/item','ItemController@create')->name('item.create');
    Route::post('/item/{id}','ItemController@update')->name('item.update');
    Route::get('/item/{id}','ItemController@detail')->name('item.detail');

    Route::get('/fetch/unit','UnitController@fetch')->name('fetch.unit');
    Route::get('/fetch/category','ItemCategoryController@fetch')->name('fetch.category');
});