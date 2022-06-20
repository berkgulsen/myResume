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
    //return view('welcome');
    return view('front.index');
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('panel','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('giris','App\Http\Controllers\Back\AuthController@login')->name('login');
    //Route::post('giris','App\Http\Controllers\Back\AuthController@loginPost')->name('login.post');
});
