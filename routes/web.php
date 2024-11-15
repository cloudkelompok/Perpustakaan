<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\M4Controller;
use App\Http\Controllers\M5Controller;
use App\Http\Controllers\M6Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('password', [UserController::class, 'password'])->name('user.password');
    Route::post('password', [UserController::class, 'passwordAction'])->name('user.password.action');

    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);

    Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('user', [UserController::class, 'index'])->name('user.index');
});

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'loginAction'])->name('user.login.action');

Route::get('user', [UserController::class, 'index'])->name('user.index');

Route::view('/home', 'home');
