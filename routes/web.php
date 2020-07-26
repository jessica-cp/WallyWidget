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

/**User logged in**/

Route::group(['middlware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/widget', 'ProductController@index')->name('site.products.index');
});

/**Admin Access**/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'AdminController@index')->name('site.admin.index');
        Route::get('/create', 'AdminController@create')->name('site.admin.create');
        Route::post('/', 'AdminController@store')->name('site.admin.store');
        Route::get('/edit/{id}', 'AdminController@edit')->name('site.admin.edit');
        Route::put('/{id}', 'AdminController@update')->name('site.admin.update');
        Route::delete('{id}', 'AdminController@destroy')->name('site.admin.destroy');
    });
});
