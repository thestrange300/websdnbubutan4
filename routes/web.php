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
    return redirect('/test');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/post', function () {
    return view('dashboard_post');
});

Route::get('/dashboard/guru', function () {
    return view('dashboard_guru');
});

Route::get('/dashboard/create', function () {
    return view('dashboard_create');
});