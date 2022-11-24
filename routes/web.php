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

Route::get('home','App\Http\Controllers\PageController@getIndex')->name('home');

Route::get('loai/{type}','App\Http\Controllers\PageController@getLoai')->name('loaisanpham');

Route::get('chi-tiet/{id}','App\Http\Controllers\PageController@getChitiet')->name('chitietsanpham');

Route::get('dang-ki','App\Http\Controllers\PageController@getSignup')->name('signup');
Route::post('dang-ki','App\Http\Controllers\PageController@postSignup')->name('signup');

Route::get('dang-nhap','App\Http\Controllers\PageController@getLogin')->name('login');
Route::post('dang-nhap','App\Http\Controllers\PageController@postLogin')->name('login');

Route::get('dang-xuat','App\Http\Controllers\PageController@getLogout')->name('logout');

Route::get('profile','App\Http\Controllers\PageController@getProfile')->name('profile');
Route::get('/chi-tiet/{id}/review/create', 'App\Http\Controllers\ReviewController@create')->name('review-create');
