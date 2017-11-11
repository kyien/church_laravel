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

    Route::get('/logout','Auth\AdminController@logout')->name('admin.logout')->middleware('auth:admins');
    
    Route::get('/loginform','Auth\AdminController@showLoginForm')->name('admin.loginform');
    Route::post('/login','Auth\AdminController@login')->name('admin.login.submit');
    Route::get('/dash','Auth\AdminAuthController@dashview')->name('admin.dash');
    Route::get('/sys_user_add_view','Auth\AdminAuthController@adduser_view')->name('admin.add.userview');
    Route::get('/sys_users_view','Auth\AdminAuthController@system_users_view')->name('admin.usersview');
    // Route::get('/user_edit_view/{id}','Auth\AdminAuthController@edituser_view')->name('admin.edit.usersview');
    Route::post('/sys_user_add','Auth\AdminAuthController@adduser')->name('admin.add.user');
    Route::put('/sys_user_edit','Auth\AdminAuthController@edituser')->name('admin.update.user');
    Route::delete('/sys_user_delete/{user_id}','Auth\AdminAuthController@deleteSystemUser')->name('admin.delete.user');

    Route::resource('/user','UsersController');

        //transactions get view routes
    Route::get('/expenses_view','TransactionsController@get_expenses_view')->name('expense.view');
    Route::get('/payments_view','TransactionsController@get_payments_view')->name('payment.view');
    Route::get('/transactions_view','TransactionsController@get_transactions_view')->name('transaction.view');
    //transactions post routes
    Route::post('/expenses_add','TransactionsController@store_expenses');
    Route::post('/payments_add','TransactionsController@store_payments');
    Route::post('/transactions_add','TransactionsController@store_transactions');
    
    
    // //transactions put/patch routes
    // Route::post('/expenses_view','TransactionsController@get_expenses_view');
    // Route::post('/expenses_view','TransactionsController@get_expenses_view');
    // Route::post('/expenses_view','TransactionsController@get_expenses_view');

    
    // //transactions delete  routes
    // Route::post('/expenses_view','TransactionsController@get_expenses_view');
    // Route::post('/expenses_view','TransactionsController@get_expenses_view');
    // Route::post('/expenses_view','TransactionsController@get_expenses_view');

    

});
