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

Route::get('', 'PerfectmoneyController@ask_balance')->name('perfect.balance.request');
Route::post('balance', 'PerfectmoneyController@show_balance')->name('perfect.balance.show');
