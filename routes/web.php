<?php

use Illuminate\Support\Facades\Route;



Auth::routes();


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', 'HomeController@index')->name('home');


});
