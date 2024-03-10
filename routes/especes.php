<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspeceController;

/*
|--------------------------------------------------------------------------
| Routes pour les Especes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    // routes pour gérer les espéces
    Route::get('/especes', [EspeceController::class, 'index'])->name('especes.index');
});
