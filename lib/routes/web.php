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

Route::get('/', function () {
    return view('web.page.dashboard.index');
});

//
Route::group(['namespace' => 'Admin\Utils'], function () {
    Route::get('/login', 'UtilsController@admin_login')->name('admin.page.login');
});


Route::group(['middleware' => ['auth.admin']], function () {
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.page.dashboard');
    });
});

Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@home')->name('admin.page.home');
    Route::get('/home', 'HomeController@home');
});
