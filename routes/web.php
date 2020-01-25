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

Route::get('/','MainpageController@index')->name('mainpage');
Route::resource('/fileinfo','FileinfoController');




Auth::routes();
Route::get('/admin/dashboard', 'Admin\DashboardController@Dashboard')->name('admin');
Route::resource('/admin/admin','Admin\AdminController');

Route::get('/user','UserController@index');
Route::get('/user/checkfile','UserController@checkFile')->name('user.checkfile');


Route::get('/home', 'HomeController@index')->name('home');
  
Route::get('test-logout', function () {
 Auth::logout(); 

 	return redirect('login');
 	}
 )->name('logout');