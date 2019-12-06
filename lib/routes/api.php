<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Admin\Utils', 'prefix' => 'utils'], function () {
    Route::post('/', 'AjaxController@admin_login_ajax')->name('admin.page.ajax');
    Route::post('/login', 'AjaxController@admin_login_ajax')->name('admin.page.login.ajax');
    Route::get('/logout', 'AjaxController@admin_logout_ajax')->name('admin.page.logout.ajax');
//    Route::post('/forgot', 'UtilsController@admin_post_forgot')->name('admin.page.post.forgot');

});