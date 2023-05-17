<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'home']);

Route::get('/profil', [BlogController::class, 'profil']);

Route::get('/about', [BlogController::class, 'about']);

Route::get('detail/{slulg}', [BlogController::class, 'detail']);
