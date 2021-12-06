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

Route::get('/admin/login','Front\FrontendController@admin');
Route::get('/','Front\FrontendController@index')->name('front.index');
Route::get('/about','Front\FrontendController@about')->name('front.about');
Route::get('/services','Front\FrontendController@services')->name('front.services');
Route::get('/front/gallery','Front\FrontendController@gallery')->name('front.gallery');
Route::get('/blogs','Front\FrontendController@blogs')->name('front.blogs');
Route::get('/products','Front\FrontendController@products')->name('front.products');
Route::get('/product/{id}','Front\FrontendController@product')->name('front.product');
Route::get('/contact','Front\FrontendController@contact')->name('front.contact');
Route::get('/checkout','Front\FrontendController@checkout')->name('front.checkout')->middleware('auth');
Route::post('/checkout/submit','Front\FrontendController@checkoutSubmit')->name('checkout.submit')->middleware('auth');

Route::post('/addtocart', 'Front\FrontendController@addtocart')->name('addtocart');
Route::get('/cartitems', 'Front\FrontendController@cartitems')->name('cartitems');
Route::get('/removcart/{id}', 'Front\FrontendController@removcart')->name('remove.cart');

Route::get('/modal/booking','Front\FrontendController@modalBooking')->name('modal.booking');
Route::get('/modal/address','Front\FrontendController@modalAddress')->name('modal.address');
Route::get('/modal/opening','Front\FrontendController@modalOpening')->name('modal.opening');

Auth::routes();

Route::group(['middleware' => ['auth', 'web', 'role']], function() {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/general/settings', 'Admin\GeneralSettingsController@settings')->name('general.settings');
Route::get('/general/slider', 'Admin\GeneralSettingsController@slider')->name('general.slider');
Route::get('/general/testimonial', 'Admin\GeneralSettingsController@testimonial')->name('general.testimonial');
Route::get('/general/offers', 'Admin\GeneralSettingsController@offers')->name('general.offers');
Route::post('/settings/store', 'Admin\GeneralSettingsController@settingsStore')->name('settings.store')->middleware('optimizeImages');
Route::post('/slider/store', 'Admin\GeneralSettingsController@sliderStore')->name('slider.store')->middleware('optimizeImages');
Route::post('/testimonial/store', 'Admin\GeneralSettingsController@testimonialStore')->name('testimonial.store');
Route::post('/offer/store', 'Admin\GeneralSettingsController@offerStore')->name('offer.store');

Route::get('/general/sale/product', 'Admin\GeneralSettingsController@saleproduct')->name('saleproduct');
Route::post('/sale/product/store', 'Admin\GeneralSettingsController@saleproductstore')->name('saleproduct.store');

Route::get('/category/index', 'Admin\CategoryController@index')->name('category.index');
Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('category.delete');
Route::post('/category/store', 'Admin\CategoryController@store')->name('category.store');


Route::get('/services/index', 'Admin\ServiceController@index')->name('services.index');
Route::get('/services/create', 'Admin\ServiceController@create')->name('services.create');
Route::get('/services/edit/{id}', 'Admin\ServiceController@edit')->name('services.edit');
Route::get('/services/delete/{id}', 'Admin\ServiceController@delete')->name('services.delete');
Route::post('/services/store', 'Admin\ServiceController@store')->name('services.store');
Route::post('/services/update/{id}', 'Admin\ServiceController@update')->name('services.update');

Route::get('/subcategory/index', 'Admin\CategoryController@subcategoryindex')->name('subcategory.index');
Route::get('/subcategory/delete/{id}', 'Admin\CategoryController@subcategorydelete')->name('subcategory.delete');
Route::post('/subcategory/store', 'Admin\CategoryController@subcategorystore')->name('subcategory.store');

Route::post('/fetchsubcategory', 'Admin\CategoryController@fetchsubcategory')->name('fetchsubcategory');

Route::get('/products/create', 'Admin\ProductController@create')->name('products.create');
Route::post('/products/update/{id}', 'Admin\ProductController@update')->name('product.update');
Route::get('/products/index', 'Admin\ProductController@index')->name('products.index');
Route::get('/products/edit/{id}', 'Admin\ProductController@edit')->name('product.edit');
Route::post('/products/store', 'Admin\ProductController@store')->name('product.store');
Route::get('/products/delete/{id}', 'Admin\ProductController@delete')->name('product.delete');

    Route::get('orders/index', 'Admin\OrderController@index')->name('order.index');
    Route::get('orders/view/{id}', 'Admin\OrderController@view')->name('order.view');
    Route::get('orders/status/{id}', 'Admin\OrderController@status')->name('order.status');
    Route::get('orders/complete', 'Admin\OrderController@complete')->name('order.complete');

    Route::get('/update-Password', [
        'uses' => 'Admin\CategoryController@password_change',
        'as' => 'change.password'
    ]);
    Route::post('/update-password/store', [
        'uses' => 'Admin\CategoryController@password_update',
        'as' => 'update.password'
    ]);

});
