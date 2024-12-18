<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/task/{id}', [TaskController::class, 'show'])->where('id', '[0-9]+')->name('task.show');
    Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->where('id', '[0-9]+')->name('task.edit');
    Route::patch('/task/edit/{id}', [TaskController::class, 'update'])->where('id', '[0-9]+')->name('task.update');
    Route::get('/task/delete/{id}', [TaskController::class, 'destroy'])->where('id', '[0-9]+')->name('task.destroy');
});

require __DIR__.'/auth.php';
