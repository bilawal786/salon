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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/general/settings', 'Admin\GeneralSettingsController@settings')->name('general.settings');
Route::get('/general/slider', 'Admin\GeneralSettingsController@slider')->name('general.slider');
Route::get('/general/testimonial', 'Admin\GeneralSettingsController@testimonial')->name('general.testimonial');
Route::get('/general/offers', 'Admin\GeneralSettingsController@offers')->name('general.offers');
Route::post('/settings/store', 'Admin\GeneralSettingsController@settingsStore')->name('settings.store')->middleware('optimizeImages');
Route::post('/slider/store', 'Admin\GeneralSettingsController@sliderStore')->name('slider.store')->middleware('optimizeImages');
Route::post('/testimonial/store', 'Admin\GeneralSettingsController@testimonialStore')->name('testimonial.store');
Route::post('/offer/store', 'Admin\GeneralSettingsController@offerStore')->name('offer.store');
