<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () { return view('auth/login'); });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ADMIN

Route::middleware(['auth', 'checkRole:admin'])->group(function () {

    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/search', [SiswaController::class, 'search'])->name('searchSiswa');
    Route::get('/siswa/create', [SiswaController::class, 'create']);
    Route::post('/siswa', [SiswaController::class, 'store']);
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
    Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);

    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::resource('blog', BlogController::class);

    
});

