<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Promise\Create;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/tentang', function(){
    return view('tentang');
})->name('tentang');

Route::name('berita')->prefix('berita')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('_posts');
    Route::get('/{post:slug}', [PostController::class, 'show'])->name('_post');
});


Route::get('/fasilitas', function(){
    return view('fasilitas');
})->name('fasilitas');

Route::middleware(['auth', 'verified', Admin::class])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('/berita', AdminPostController::class)->parameters([
        'berita' => 'post'
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
