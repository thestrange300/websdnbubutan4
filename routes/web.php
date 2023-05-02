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
    return view('profile', [
        'active' => 'profile'
    ]);
});

Route::get('/test', function () {
    return view('test', [
        'active' => 'home'
    ]);
});

Route::get('/post', function () {
    return view('post', [
        'active' => 'home'
    ]);
});

Route::get('/post/detail', function () {
    return view('detailpost', [
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'home'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'active' => 'dashboard'
    ]);
});

Route::get('/dashboard/post', function () {
    return view('dashboard_post', [
        'active' => 'dashboardpost'
    ]);
});

Route::get('/dashboard/guru', function () {
    return view('dashboard_guru', [
        'active' => 'dashboardguru'
    ]);
});

Route::get('/dashboard/post/create', function () {
    return view('dashboard_create', [
        'active' => 'dashboardpost'
    ]);
});