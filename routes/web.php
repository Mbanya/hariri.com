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

Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/services','PagesController@service')->name('service');
Route::get('/contact','PagesController@contact')->name('contact');
Route::resource('blog', 'BlogController');
Route::get('package/{slug}', 'PackagesController@show')->name('package.show');
Route::get('order','OrdersController@index')->name('order.index');
Route::get('service/{slug}','ServicesController@show')->name('service.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
