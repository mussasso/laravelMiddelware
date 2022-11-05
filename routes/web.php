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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('Connected')->name('dashboard');
Route::get('/home', function () {
    return view('pages.user.home');
})->middleware('Connected')->name('home');
Route::get('/article', function () {
    return view('pages.user.article');
})->middleware('Connected')->name('article');


require __DIR__.'/auth.php';
