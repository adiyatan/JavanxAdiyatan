<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

use App\Http\Controllers\ThanksgivingController;

Route::prefix('thanksgiving')->group(function () {
    Route::get('/', [ThanksgivingController::class, 'index']);
    Route::post('/get-recommendations', [ThanksgivingController::class, 'getRecommendations']);
    Route::get('/{id}/detail', [ThanksgivingController::class, 'showDetail']);
});
