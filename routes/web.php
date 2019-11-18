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

Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');

Route::group(['middleware'=>'role:Super Admin','auth'],function(){
    Route::resource('admin/user/permission', 'Admin\\PermissionController');
    Route::resource('admin/user/role', 'Admin\\RoleController');
    Route::resource('admin/user', 'Admin\\UserController');
});

Route::match(['get','post'], '/user/register', 'Admin\UserController@registerUser');

Route::match(['get','post'], '/', 'HomeController@index')->name('homepage');
