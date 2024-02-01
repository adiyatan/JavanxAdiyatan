<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThanksgivingController;
use Illuminate\Support\Facades\Storage;

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
Route::get('/download-certificate/{name}', function ($name) {
    $filePath = public_path("sertifikat/{$name}");

    $downloadFileName = "Certificate {$name}.pdf";

    return response()->download($filePath, $downloadFileName);
});

Route::prefix('thanksgiving')->group(function () {
    Route::get('/', [ThanksgivingController::class, 'index']);
    Route::post('/get-recommendations', [ThanksgivingController::class, 'getRecommendations']);
    Route::get('/{id}/detail', [ThanksgivingController::class, 'showDetail']);
});

Route::get('/admin/thanksgiving', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/thanksgiving/{idDetail}/edit', [AdminController::class, 'edit'])->name('admin.thanksgiving.edit');
Route::put('/admin/thanksgiving/{idDetail}', [AdminController::class, 'update'])->name('admin.update');
