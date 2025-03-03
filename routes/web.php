<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StreamerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [RegisteredUserController::class, 'create']);
Route::post('/signup', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('search', 'App\Http\Controllers\SearchController@index')->name('search');
Route::get('search/results', 'App\Http\Controllers\SearchController@search')->name('search.results');


Route::get('/profile', function () {
    return view('components.profile.user-profile');
});

Route::get('/top-streamers', [StreamerController::class, 'topStreamers']);