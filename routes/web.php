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
    return redirect('https://landing.sekitarkita.id');
});

Route::get('/download', function () {
    return redirect('https://drive.google.com/file/d/1fM9JNaNZ_BQ18dZAKsgEh9X5weyb7WK3/view');
});

Route::view('/mapping', 'mapping.device')->name('mapping.device');
Route::view('/mapping-member', 'mapping.member')->name('mapping.member');
Route::view('/mapping-puppeteer', 'mapping.mapping-for-puppeteer');
