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

Route::get('/', 'IndexController@index')->name('web.index');
Route::get('/subscribe', 'IndexController@subscribe')->name('web.index.subscribe');
Route::get('/single', 'IndexController@single')->name('web.single');
Route::get('/products', 'ProductController@index')->name('web.product');
Route::get('/products/ear', 'ProductController@ear')->name('web.product.ear');
Route::get('/about', 'AboutController@index')->name('web.about');
Route::get('/contact', 'ContactController@index')->name('web.contact');
Route::post('/contact/store', 'ContactController@store')->name('web.contact.store');
Route::get('/blog', 'IndexController@services')->name('web.blog');
Route::get('/warranty', 'WarrantyController@index')->name('web.warranty');
Route::post('/warranty/store', 'WarrantyController@store')->name('web.warranty.store');
