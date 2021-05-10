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






});
