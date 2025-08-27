<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;

Route::get('/', function () {
    return view('home');
});

// Movies
Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
});

// Directors
Route::prefix('directors')->group(function () {
    Route::get('/', [DirectorController::class, 'index'])->name('directors.index');
    Route::get('/create', [DirectorController::class, 'create'])->name('directors.create');
    Route::post('/', [DirectorController::class, 'store'])->name('directors.store');
    Route::get('/{director}', [DirectorController::class, 'show'])->name('directors.show');
    Route::get('/{director}/edit', [DirectorController::class, 'edit'])->name('directors.edit');
    Route::put('/{director}', [DirectorController::class, 'update'])->name('directors.update');
    Route::delete('/{director}', [DirectorController::class, 'destroy'])->name('directors.destroy');
});
