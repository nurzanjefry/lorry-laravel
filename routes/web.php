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
    return view('welcome');
});

Route::get('settings/sponsor/', 'SponsorController@showSponsor')->name('finance_code.sponsor');

Route::get('/login', 'LoginController@Login')->name('login');
Route::post('/loginNow', 'LoginController@loginNow')->name('loginNow');