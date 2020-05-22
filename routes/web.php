<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', 'HouseController@index');

Route::get('/init', 'HouseController@initialize');

Route::post('/src', 'SearchController@search')->name('search');

Route::get('/results', 'HouseController@view')->name('results');
