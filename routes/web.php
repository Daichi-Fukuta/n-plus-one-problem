<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/article', 'ArticleController@handle');
Route::get('/author', 'AuthorController@handle');