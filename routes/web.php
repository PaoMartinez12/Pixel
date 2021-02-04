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

Route::get('/', function () {
    return view('layouts.template');
});

//=======================================Login=============================================//
Route::get('/login', [App\Http\Controllers\HomeController::class, 'LoginForm'])->name('login');
Auth::routes();
Route::get('/loginForm', 'PaymentController@showLoginForm') ->name('loginForm');
//======Fin Login====================//



//=======================================Payment=============================================//
Route::get('/payment/{monto}/{id}', 'PaymentController@paymentForm') ->name('payForm');

Route::post('/payment', 'PaymentController@pay') ->name('pay');
//======Fin Payment====================//






