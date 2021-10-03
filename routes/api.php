<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\GenreController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'edit']]);
    Route::resource('genres', 'GenreController', ['except' => ['create', 'edit']]);
});
