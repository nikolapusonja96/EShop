<?php

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
//Front show
Route::pattern('id', '[0-9]+');
Route::get('/', 'FrontEndController@front_show');
Route::get('/product/{id}','FrontEndController@show_single_product');
Route::get('/store','FrontEndController@showAllProducts');
Route::get('/faq', 'FrontEndController@showFAQ');
Route::get('about_us','FrontEndController@showAboutUs');
Route::get('/author', 'FrontEndController@showAuthor');


//contact mail
Route::get('/contact', 'SendMailController@showContactForm');
Route::post('/contact/sendemail','SendMailController@sendMail');

//login/signup
Route::get('/signup', 'UserController@show_signup_form');
Route::post('/signup', 'UserController@signUp');
Route::get('/login','UserController@show_login_form');
Route::post('/login','UserController@ulogin');
Route::get('/logout', function (){
    session()->forget('user');
    session()->forget('cart');
    return redirect('/');

});
//cart
Route::get('/addToCart/{id}','CartController@getAddToCart');
Route::get('/cart','CartController@getCart');
Route::get('/reduce/{id}', 'CartController@getReduceByOne');
Route::get('/removeAll/{id}', 'CartController@getRemoveAll');
Route::group(['middleware' => 'user'], function(){

    Route::get('/checkout', 'CartController@getCheckout');
    Route::post('/postCheckout', 'CartController@placeOrder');

//user
    Route::get('/user-orders/{id}', 'UserController@getUserOrders');
    Route::get('/user-profile/{id}', 'UserController@getUserProfile');
});

//Admin
Route::group(['middleware' =>'admin'], function(){
    Route::get('/admin/logout', function (){
        session()->forget('admin');
        return redirect('/');
    });
    Route::get('/admin','AdminController@getIndex');
    Route::get('/admin/user-activities', 'AdminController@getUserActivities');
    Route::get('/admin/orders', 'AdminController@getUsersOrders');

//Admin Insert
    Route::get('/admin/insert-product','AdminController@showInsertProductForm');
    Route::post('/admin/insertProduct','AdminController@insertProduct');
    Route::get('/admin/insert-slider-image','AdminController@showInsertSliderImgForm');
    Route::post('/admin/insert-slider-image', 'AdminController@insertSlider');

//Admin update
    Route::get('/admin/update-products','AdminController@showUpdateProductForm');
    Route::get('/admin/update-product/{id}', 'AdminController@showFinalUpdateProductForm');
    Route::post('/admin/final-update-product/{id}', 'AdminController@updateProduct');

//Admin delete
    Route::get('/admin/delete-product','AdminController@showDeleteProductForm');
    Route::get('/admin/delete-product/{id}','AdminController@deleteProduct');
    Route::get('/admin/delete-slider-image','AdminController@showDeleteSliderImgForm');
    Route::get('/admin/delete-slider-image/{id}', 'AdminController@deleteSliderImg');
});

//sortAllProducts
Route::get('/store/ASC','FrontEndController@storeASC');
Route::get('/store/DESC','FrontEndController@storeDESC');



Route::get('/rolex', 'FrontEndController@showAllRolex');
Route::get('/omega', 'FrontEndController@showAllOmega');

//Groups of routes for sort, filters

//Group women_watches
Route::group(['prefix' => '/categories/women_watches'], function () {
    Route::get('/ASC', 'FrontEndController@showWomenWatchesASC');
    Route::get('/DESC', 'FrontEndController@showWomenWatchesDESC');
    Route::get('/rolex', 'FrontEndController@showWomenRolex');
    Route::get('/daniel_wellington', 'FrontEndController@showDanielWellington');
    Route::get('/omega', 'FrontEndController@showWomenOmega');
    Route::get('/', 'FrontEndController@showWomenWatches');
});

//Group men_watches
Route::group(['prefix' => '/categories/men_watches'], function () {
    Route::get('/', 'FrontEndController@showMenWatches');
    Route::get('/ASC', 'FrontEndController@showMenWatchesASC');
    Route::get('/DESC', 'FrontEndController@showMenWatchesDESC');
    Route::get('/omega', 'FrontEndController@showMenOmega');
    Route::get('/rolex', 'FrontEndController@showMenRolex');
    Route::get('/ulysse_nardin', 'FrontEndController@showUlysseNardin');
    Route::get('/omega/ASC', 'FrontEndController@showMenOmegaASC');
    Route::get('/omega/DESC', 'FrontEndController@showMenOmegaDESC');
    Route::get('/rolex/ASC', 'FrontEndController@showMenRolexASC');
    Route::get('/rolex/DESC', 'FrontEndController@showMenRolexDESC');
});

//Group un
Route::group(['prefix' => '/categories/men_watches/un'], function () {
    Route::get('/bracelet_type/rubber', 'FrontEndController@showUlysseNardinRubber');
    Route::get('/bracelet_type/leather', 'FrontEndController@showUlysseNardinLeather');
    Route::get('/ASC', 'FrontEndController@showMenUlysseNardinASC');
    Route::get('/DESC', 'FrontEndController@showMenUlysseNardinDESC');
});

//Group men omega bracelet_type
Route::group(['prefix' => '/categories/men_watches/omega/bracelet_type'], function () {
    Route::get('/leather', 'FrontEndController@showMenOmegaLeather');
    Route::get('/gold', 'FrontEndController@showMenOmegaGold');
    Route::get('/titanium', 'FrontEndController@showMenOmegaTitanium');
    Route::get('/rubber', 'FrontEndController@showMenOmegaRubber');
    Route::get('/steel', 'FrontEndController@showMenOmegaSteel');
});

//Group men rolex bracelet_type
Route::group(['prefix' => '/categories/men_watches/rolex/bracelet_type'], function () {
    Route::get('/oystersteel', 'FrontEndController@showMenRolexOysterSteel');
    Route::get('/oysterflex', 'FrontEndController@showMenRolexOysterFlex');
    Route::get('/gold', 'FrontEndController@showMenRolexGold');
    Route::get('/leather', 'FrontEndController@showMenRolexLeather');
    Route::get('/steel', 'FrontEndController@showMenRolexSteel');
});


//Group omega
Route::group(['prefix' => '/categories/women_watches/omega'], function () {
    Route::get('/bracelet_type/leather', 'FrontEndController@showWomenOmegaLeather');
    Route::get('/bracelet_type/gold', 'FrontEndController@showWomenOmegaGold');
    Route::get('/bracelet_type/steel', 'FrontEndController@showWomenOmegaSteel');
    Route::get('/ASC', 'FrontEndController@showWomenOmegaASC');
    Route::get('/DESC', 'FrontEndController@showWomenOmegaDESC');
});

//Group rolex
Route::group(['prefix' => '/categories/women_watches/rolex'], function () {
    Route::get('/bracelet_type/steel', 'FrontEndController@showWomenRolexSteel');
    Route::get('/ASC', 'FrontEndController@showWomenRolexASC');
    Route::get('/DESC', 'FrontEndController@showWomenRolexDESC');
});

//Group dw
Route::group(['prefix' => '/categories/women_watches/dw'], function () {
    Route::get('/bracelet_type/leather', 'FrontEndController@showDanielWellingtonLeather');
    Route::get('/bracelet_type/steel', 'FrontEndController@showDanielWellingtonSteel');
    Route::get('/ASC', 'FrontEndController@showDanielWellingtonASC');
    Route::get('/DESC', 'FrontEndController@showDanielWellingtonDESC');
});
