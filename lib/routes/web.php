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