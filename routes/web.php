<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', [FilmController::class, 'getAllFilms'])->name('films.index');
Route::post('/films', [FilmController::class, 'createFilm'])->name('films.store');

Route::get('/films/{id}', [FilmController::class, 'getFilmByID'])->name('films.show');
Route::get('/films/{id}/edit', [FilmController::class, 'editFilm'])->name('films.edit');
Route::put('/films/{id}', [FilmController::class, 'updateFilm'])->name('films.update');
Route::delete('/films/{id}', [FilmController::class, 'deleteFilm'])->name('films.destroy');
