<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\guruController;

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

Route::get('/login', function () {
    return view('login', [
        'active' => 'home'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'active' => 'dashboard'
    ]);
});

Route::get('/dashboard/setting', function () {
    return view('dashboard_pengaturan', [
        'active' => 'pengaturan'
    ]);
});

// Route::get('/dashboard/post', function () {
//     return view('dashboard_post', [
//         'active' => 'dashboardpost'
//     ]);
// });

Route::get('/dashboard/guru', [guruController::class, 'index'])->name('index.guru');
Route::post('/dashboard/guru/tambah', [guruController::class, 'store'])->name('tambah.guru');
Route::delete('/dashboard/guru/hapus/{guru:id}', [guruController::class, 'delete'])->name('hapus.guru');

Route::get('/dashboard/post/create', function () {
    return view('dashboard_create', [
        'active' => 'dashboardpost'
    ]);
});

Route::resource('dashboard/post', postController::class);