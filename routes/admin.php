<?php

use Illuminate\Support\Facades\Route;

Auth::routes();





Route::group(['prefix'=>'dashboard','namespace'=>'Admin','middleware'=>'auth'],function (){

    //main dashboard routes
    Route::get('/main','MainController@index')->name('dashboard.main');


    //categories routes
    Route::get('/categories/show-all','CategoryController@index')->name('categories.all');
    Route::get('/categories/create','CategoryController@create')->name('categories.create');





});
