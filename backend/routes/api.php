<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\VideoGameController;  

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Genre Routes- 5 rest endpoints for genres
Route::get('/genres', [GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);
Route::get('/genres/{id}', [GenreController::class, 'show']);
Route::patch('/genres/{id}', [GenreController::class, 'update']);
Route::delete('/genres/{id}', [GenreController::class, 'destroy']);

//Video Game Routes- 5 rest endpoints for video games
Route::get('/video-games', [VideoGameController::class, 'index']);
Route::post('/video-games', [VideoGameController::class, 'store']);
Route::get('/video-games/{id}', [VideoGameController::class, 'show']);
Route::patch('/video-games/{id}', [VideoGameController::class, 'update']);
Route::delete('/video-games/{id}', [VideoGameController::class, 'destroy']);