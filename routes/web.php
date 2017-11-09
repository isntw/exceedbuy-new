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

function prefixRouteNames($prefix, Array $methods = ['index', 'store', 'create', 'show', 'destroy', 'update', 'edit']) {
    $routeNames = [];
    foreach ($methods as $method) {
        $routeNames[$method] = $prefix . '.' . $method;
    }

    return $routeNames;
}

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

Route::get('/contest', 'ContestController@index')->name('web.contest.index');
Route::post('/contest/store', 'ContestController@store')->name('web.contest.store');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/dashboard/show', 'AdminController@show')->name('admin.dashboard.show');
});
