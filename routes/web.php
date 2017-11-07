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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','Auth\LoginController@logout')->name('logout')->middleware('auth');
// Route::get('/login','Auth\LoginController@login')->name('login');

//backend routes
Route::group(['prefix'=>'admin'],function(){

    Route::get('/loginform','Auth\AdminController@showLoginForm')->name('admin.loginform');
    Route::post('/login','Auth\AdminController@login')->name('admin.login.submit');
    Route::get('/dash','Auth\AdminAuthController@dashview')->name('admin.dash');
    Route::get('/user_add_view','Auth\AdminAuthController@adduser_view')->name('admin.add.userview');
    Route::get('/users_view','Auth\AdminAuthController@allusers_view')->name('admin.usersview');
    // Route::get('/user_edit_view/{id}','Auth\AdminAuthController@edituser_view')->name('admin.edit.usersview');
    Route::post('/user_add','Auth\AdminAuthController@adduser')->name('admin.add.user');
    Route::put('/user_edit_view','Auth\AdminAuthController@edituser')->name('admin.update.user');
    Route::delete('/user_delete/{id}','Auth\AdminAuthController@deleteSystemUser')->name('admin.delete.user');
    

});
