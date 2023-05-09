<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\homeController;
use App\Models\post;

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

Route::get('/test', [homeController::class, 'index']);

Route::get('/post/{kategori}', [homeController::class, 'filterPost']);

Route::get('/post/{kategori}/{slug}', [homeController::class, 'show']);

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

Route::get('/dashboard/post', [postController::class, 'index'])->name('index.post');
Route::get('/dashboard/posts/{id}', [postController::class, 'getPosts'])->name('posts.get');
Route::get('/dashboard/posts2/{id}', [postController::class, 'getPosts2'])->name('posts2.get');
Route::post('/dashboard/post/updateSpecial', [postController::class, 'updateSpecial'])->name('updateSpecial.post');
Route::post('/dashboard/post/updateSpecial2', [postController::class, 'updateSpecial2'])->name('updateSpecial2.post');

Route::get('/dashboard/post/create', [postController::class, 'create'])->name('create.post');
Route::post('/dashboard/post/create', [postController::class, 'store'])->name('tambah.post');
Route::get('/dashboard/post/{id}/edit', [postController::class, 'edit'])->name('edit.post');
Route::put('/dashboard/post/update/{id}', [postController::class, 'update'])->name('update.post');
Route::delete('/dashboard/post/{id}', [postController::class, 'destroy'])->name('delete.post');