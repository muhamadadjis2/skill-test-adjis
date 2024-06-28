<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendTestContoller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/random-str', [backendTestContoller::class, 'randomStr']);
Route::get('/sorting-array', [backendTestContoller::class, 'sortingArray']);
Route::get('/price-count', [backendTestContoller::class, 'priceCount']);
