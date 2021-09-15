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

Route::get('/','Front\FrontendController@index')->name('front.index');
Route::get('/about','Front\FrontendController@about')->name('front.about');
Route::get('/services','Front\FrontendController@services')->name('front.services');
Route::get('/gallery','Front\FrontendController@gallery')->name('front.gallery');
Route::get('/blogs','Front\FrontendController@blogs')->name('front.blogs');
Route::get('/contact','Front\FrontendController@contact')->name('front.contact');

Route::get('/modal/booking','Front\FrontendController@modalBooking')->name('modal.booking');
Route::get('/modal/address','Front\FrontendController@modalAddress')->name('modal.address');
Route::get('/modal/opening','Front\FrontendController@modalOpening')->name('modal.opening');
