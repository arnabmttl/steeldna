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

Route::get('/test', function(){
    echo 'Admin Test';
});


Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/sendMail', [App\Http\Controllers\MailController::class, 'sendMail'])->name('sendMail');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('admin.auth')->group(function(){
	// Dashboard
	Route::get('/dashboard', 'HomeController@index')->name('dashboard');
	Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword');
	Route::post('/savepassword', 'HomeController@savepassword')->name('savepassword');
	

});
