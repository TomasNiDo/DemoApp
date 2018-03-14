<?php

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

Route::get('/', 'ArticlesController@index')->name('articles');
Route::middleware('auth')->group(function () {
    Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
    Route::post('articles', 'ArticlesController@store')->name('articles.store');
});
