<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;


Route::get('/', function () {
    return view('home');
});

// Movies
Route::group(['prefix' => 'movies'], function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/{movie}/destroy', [MovieController::class, 'destroy'])->name('movies.destroy');
});

// Directors
Route::group(['prefix' => 'directors'], function () {
    Route::get('/', [DirectorController::class, 'index'])->name('directors.index');
    Route::get('/create', [DirectorController::class, 'create'])->name('directors.create');
    Route::post('/', [DirectorController::class, 'store'])->name('directors.store');
    Route::get('/{directors}', [DirectorController::class, 'show'])->name('directors.show');
    Route::get('/{directors}/edit', [DirectorController::class, 'edit'])->name('directors.edit');
    Route::put('/{directors}', [DirectorController::class, 'update'])->name('directors.update');
    Route::delete('/{directors}', [DirectorController::class, 'destroy'])->name('directors.destroy');
});