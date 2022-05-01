<?php

use Illuminate\Http\Request;

Route::apiResource('products', 'Api\ProductController');
Route::apiResource('brands', 'Api\BrandController');
Route::get('highlights', 'Api\ProductController@highlights')->name('highlights');


