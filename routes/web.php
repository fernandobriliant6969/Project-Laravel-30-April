<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/prodi', ProdiController::class);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/periode', PeriodeController::class);
    Route::resource('/fakultas', FakultasController::class);
    Route::resource('/dashboard', DashboardController::class);
});

require __DIR__.'/auth.php';
