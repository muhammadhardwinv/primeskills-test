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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/layouts', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/storelocation  ', function () {
    return view('storelocation');
});
