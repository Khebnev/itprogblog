<?php

use Illuminate\Support\Facades\Route;
/*
    Route::get('/article/{id}/{second_parametr}', function($id, $second_parametr) {
        return 'ID статьи: '.$id.'второй параметр:'.$second_parametr;
    });
    Route::get('/hello', function () {
        return 'Страница hello';
    // });
    Route::get('/articles','ArticlesController@index');
    Route::get('/articles/{id}','ArticlesController@show');
*/

Route::get('/', 'StaticController@index');
Route::get('/about-us', 'StaticController@about');

// Route::get('/articles', 'ArticlesController@index');
Route::resource('articles', 'ArticlesController');