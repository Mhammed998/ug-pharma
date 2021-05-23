<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' =>
    ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/products', 'HomeController@products')->name('products');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/profile', 'HomeController@profile')->name('profile')->middleware('auth');
    Route::get('/cart', 'HomeController@cart')->name('cart')->middleware('auth');




});


