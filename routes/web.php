<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('pokemons', [PokemonController::class, 'index']);
Route::get('pokemons/create', [PokemonController::class, 'create']);
Route::post('pokemons', [PokemonController::class, 'store']);
Route::get('pokemons/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemons/{id}', [PokemonController::class, 'update']);
Route::delete('pokemons/{id}', [PokemonController::class, 'destroy']);

Route::get('coachs', [CoachController::class, 'index']);
Route::get('coachs/create', [CoachController::class, 'create']);
Route::post('coachs', [CoachController::class, 'store']);
Route::get('/coach{id}/edit', [CoachController::class, 'edit']);
Route::put('/coach{id}', [CoachController::class, 'update']);
Route::delete('/coach{id}', [CoachController::class, 'destroy']);