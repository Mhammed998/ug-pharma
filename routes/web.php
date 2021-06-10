<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' =>
    ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');

    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/blog-details/{id}', 'HomeController@blogDetails')->name('blog-details');

    Route::get('/products', 'HomeController@products')->name('products');
    Route::get('/product-details/{id}', 'HomeController@productDetails')->name('product-details');
    Route::post('/product-details/review/save', 'HomeController@saveReview')->name('product-saveReview');




    Route::get('/wishlist/{product_id}', 'HomeController@addToWishList')->name('addToWishList')->middleware('auth');
    Route::get('/wishlist/remove/{product_id}', 'HomeController@removeFromWishList')->name('removeFromWishList')->middleware('auth');
    Route::get('add-to-cart/{id}', 'HomeController@addToCart')->name('addToCart');
    Route::patch('update-cart', 'HomeController@updateCart');
    Route::delete('remove-from-cart', 'HomeController@removeCart');
    Route::get('/category-details/{category_id}', 'HomeController@categoryDetails')->name('categoryDetails');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');
    Route::get('/cart', 'HomeController@cart')->name('cart')->middleware('auth');


    Auth::routes();



});


