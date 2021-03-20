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

    Route::post('/addProxy', 'ProxyController@addProxy')->name('addProxy');
    Route::post('/deleteProxy', 'ProxyController@deleteProxy')->name('deleteProxy');

    Route::get('/location', 'LocationController@show');
    Route::get('/location_', 'LocationController@allLocation');
    Route::post('/changeLocation', 'LocationController@changeLocation')->name('changeLocation');
    Route::post('/randomLocation', 'LocationController@randomLocation')->name('randomLocation');

    Route::post('/changeIp', 'IpController@changeIp')->name('changeIp');

    Route::get('/api', 'ApiController@show');
    Route::post('/changeApi', 'ApiController@change')->name('changeApi');

    Route::get('/profile', 'DashController@profile');
    // Route::get('/{page}', 'AdminController@index');
});

// Route::get('payment', 'PayPalController@payment')->name('payment');
// Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
// Route::get('payment/success', 'PayPalController@success')->name('payment.success');
// Route::post('ipn/notify','PayPalController@postNotify');

Route::get('payment', 'PaymentController@payWithpaypal')->name('payment');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');
Route::get('cancel', 'PaymentController@cancel')->name('cancel');
Route::get('notify', 'PaymentController@notify')->name('notify');