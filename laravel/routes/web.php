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

Route::get('/team', function () {
    return view('team');
});

Route::get('/team/maximilianmueller', function () {
    return view('maximilianmueller');
});

Route::get('/maximilianmueller', function () {
    return view('maximilianmueller');
});

Route::get('/team/jeremygassner', function () {
    return view('jeremygassner');
});

Route::get('/jeremygassner', function () {
    return view('jeremygassner');
});

