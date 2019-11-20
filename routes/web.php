<?php

//#################################################################################//
//           ###########            Backend Routes           ###########           //
//#################################################################################//

Auth::routes();

// Super Sadmin Routes
Route::group(['middleware'=>'role:Super Admin','auth'],function(){
    Route::resource('admin/user/permission', 'Admin\\PermissionController');
    Route::resource('admin/user/role', 'Admin\\RoleController');
    Route::resource('admin/user', 'Admin\\UserController');
});

// Routes for all Autorized Users
Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('admin/posts', 'Admin\\PostsController');
});


//#################################################################################//
//           ###########            Frontend Routes           ##########           //
//#################################################################################//

Route::match(['get','post'], '/', 'HomeController@index')->name('homepage');
Route::match(['get','post'], '/user/register', 'Admin\UserController@registerUser');



