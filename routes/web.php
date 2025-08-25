<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

use App\Models\Movie;

Route::get('/', function () {
    return view('home');
});


Route::group(['prefix' => 'movies'], function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
});