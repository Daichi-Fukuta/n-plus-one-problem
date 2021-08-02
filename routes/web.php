<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author', 'AuthorController@handle');
Route::get('/article', 'ArticleController@handle');
