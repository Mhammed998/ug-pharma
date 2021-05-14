<?php

use Illuminate\Support\Facades\Route;

Auth::routes();





Route::group(['prefix'=>'dashboard','namespace'=>'Admin'],function (){

    //main dashboard routes
    Route::get('/main','MainController@index')->name('dashboard.main');


    //categories routes
    Route::get('/categories/show-all','CategoryController@index')->name('categories.all');
    Route::get('/categories/create','CategoryController@create')->name('categories.create');
    Route::get('/categories/edit/{id}','CategoryController@edit')->name('categories.edit');
    Route::get('/categories/delete/{id}','CategoryController@destroy')->name('categories.delete');
    Route::post('/categories/store','CategoryController@store')->name('categories.store');
    Route::post('/categories/update/{id}','CategoryController@update')->name('categories.update');


    //products routes

    Route::get('/products/show-all','ProductController@index')->name('products.all');
    Route::get('/products/create','ProductController@create')->name('products.create');
    Route::post('/products/store','ProductController@store')->name('products.store');
    Route::get('/products/delete/{id}','ProductController@delete')->name('products.delete');
    Route::get('/products/edit/{id}','ProductController@edit')->name('products.edit');
    Route::post('/products/update/{id}','ProductController@update')->name('products.update');


    // members routes
    Route::get('/users/show-all','UserController@index')->name('users.all');
    Route::get('/users/delete/{id}','UserController@destroy')->name('users.destroy');
    Route::get('/users/show/{id}','UserController@show')->name('users.show');











});
