<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/jeux', [GameController::class, 'index']);
Route::get('/jeu/{id}-{slug}', [GameController::class, 'show']);
Route::get('/jeu/nouveau', [GameController::class, 'create']);
Route::post('/jeu/nouveau', [GameController::class, 'store']);
