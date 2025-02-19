<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontinensController;
use App\Http\Controllers\OrszagController;

Route::view('/', 'welcome');

Route::get('~/kontinensek/{id}', [KontinensController::class, 'Kontinens']);

Route::get('~/orszagok/{id}', [OrszagController::class, 'Orszag']);
