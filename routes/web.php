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

Route::get('/about', function () {
    return view('front_end.about');
});

Route::get('/gallery', function () {
    return view('front_end.gallery');
});

Route::get('/bolg', function () {
    return view('front_end.bolg');
});

Route::get('/bolgtwo', function () {
    return view('front_end.gafa');
});

Route::get('/contact', function () {
    return view('front_end.contact');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
