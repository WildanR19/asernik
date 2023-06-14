<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SertifikatController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('biodata', [BiodataController::class, 'index'])->name('biodata.index');
    Route::post('biodata', [BiodataController::class, 'store'])->name('biodata.store');
    Route::get('lainnya', function () {
        return view('lainnya');
    })->name('lainnya');
    Route::get('survey', function () {
        return view('survey.index');
    })->name('survey.index');
    Route::get('survey/show', function () {
        return view('survey.show');
    })->name('survey.show');
    Route::get('sertifikat-list', [SertifikatController::class, 'index'])->name('sertifikat.index');
    Route::get('sertifikat-download', [SertifikatController::class, 'download'])->name('sertifikat.download');
});

require __DIR__.'/auth.php';
