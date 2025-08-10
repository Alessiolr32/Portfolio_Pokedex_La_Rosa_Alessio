<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::controller(PokemonController::class)->group(function () {
    Route::get('/', 'index')->name('pokemon.index');
    Route::get('/pokemon/{id}', 'show')->name('pokemon.show');
    Route::get('/pokemon/type/{type}', 'filter')->name('pokemon.filter');
});

