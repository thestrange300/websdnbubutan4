<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Models\kepsek;
use App\Models\guru;

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

Route::get('/profile', function () {
    return view('profile', [
        'active' => 'profile',
        'kepsek' => kepsek::all()->first(),
        'guru' => guru::get()
    ]);
});

Route::get('/', [homeController::class, 'index']);

Route::get('/post/{kategori}', [homeController::class, 'filterPost']);

Route::get('/post/{kategori}/{slug}', [homeController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        'active' => 'home'
    ]);
});

Route::get('/dashboard/kepsek', [dashboardController::class, 'kepsek'])->name('kepsek')->middleware('admin');
Route::put('/dashboard/kepsek/{id}', [dashboardController::class, 'updateKepsek'])->name('update.kepsek');

Route::get('/login', function () {
    return view('login', [
        'active' => 'home'
    ]);
})->name('login')->middleware('guest');
Route::post('/login', [adminController::class, 'login']);

Route::post('/logout', [adminController::class, 'logout'])->name('logout');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('admin');

Route::get('/dashboard/setting', [adminController::class, 'index'])->name('index.setting')->middleware('admin');
Route::put('/dashboard/setting', [adminController::class, 'update'])->name('update.setting');

// Route::get('/dashboard/post', function () {
//     return view('dashboard_post', [
//         'active' => 'dashboardpost'
//     ]);
// });

Route::get('/dashboard/guru', [guruController::class, 'index'])->name('index.guru')->middleware('admin');
Route::post('/dashboard/guru/tambah', [guruController::class, 'store'])->name('tambah.guru');
Route::delete('/dashboard/guru/hapus/{guru:id}', [guruController::class, 'delete'])->name('hapus.guru');

Route::get('/dashboard/post', [postController::class, 'index'])->name('index.post')->middleware('admin');
Route::get('/dashboard/posts/{id}', [postController::class, 'getPosts'])->name('posts.get')->middleware('admin');
Route::get('/dashboard/posts2/{id}', [postController::class, 'getPosts2'])->name('posts2.get')->middleware('admin');
Route::post('/dashboard/post/updateSpecial', [postController::class, 'updateSpecial'])->name('updateSpecial.post');
Route::post('/dashboard/post/updateSpecial2', [postController::class, 'updateSpecial2'])->name('updateSpecial2.post');

Route::get('/dashboard/post/create', [postController::class, 'create'])->name('create.post')->middleware('admin');
Route::post('/dashboard/post/create', [postController::class, 'store'])->name('tambah.post');
Route::get('/dashboard/post/{id}/edit', [postController::class, 'edit'])->name('edit.post')->middleware('admin');
Route::put('/dashboard/post/update/{id}', [postController::class, 'update'])->name('update.post');
Route::delete('/dashboard/post/{id}', [postController::class, 'destroy'])->name('delete.post');