<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('comics', ['comics' => config('comics')]);
})->name('comics');


Route::get('/', function () {

    return view('products');
})->name('products');



//route menu
Route::get('/characters', function () {

    return view('characters');
})->name('characters');

Route::get('/movies', function () {

    return view('movies');
})->name('movies');

Route::get('/tv', function () {

    return view('tv');
})->name('tv');


Route::get('/games', function () {

    return view('games');
})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles');
})->name('collectibles');

Route::get('/video', function () {

    return view('video');
})->name('video');


Route::get('/fans', function () {

    return view('fans');
})->name('fans');

Route::get('/news', function () {

    return view('news');
})->name('news');

Route::get('/shop', function () {

    return view('shop');
})->name('shop');
