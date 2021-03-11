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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'HomeController@index');

Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/signup', 'AuthController@signup')->name('signup');

Route::get('/signin', 'AuthController@signin');
Route::get('/signup', 'AuthController@signupView');

Route::group(['middleware' => ['check.auth']], function () {
    Route::get('/dashboard', 'DashController@dashboard');
    Route::get('/location', 'DashController@location');
    Route::get('/profile', 'DashController@profile');
    Route::get('/api', 'DashController@api');

    Route::get('/myproxies', 'ProxyController@show');
    Route::get('/buy', 'ProxyController@showBuy');
    Route::proxy('/addProxy', 'ProxyController@addProxy')->name('addProxy');

    // Route::get('/{page}', 'AdminController@index');
});
