<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tugasbulananController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('back.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // tugas bulanan
    Route::get('/tugasbulanan', [tugasbulananController::class, 'index'])->name('tugasbulanan');
    Route::get('/formtugasbulanan', [tugasbulananController::class, 'formtugasbulanan'])->name('formtugasbulanan');
});

require __DIR__.'/auth.php';
