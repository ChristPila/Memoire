<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PromotionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/lpta/{id}', [PromotionController::class, 'show'])->name('lpta');
Route::post('/lpta/file', [EtudiantController::class, 'reception'])->name('lpta_rec');
Route::get('/apprenant/lpta/{id}', [HomeController::class, 'showCredit'])->name('credit');
