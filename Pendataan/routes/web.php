<?php

use App\Http\Controllers\PendataanController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pendataan', [PendataanController::class, 'index'])->name('pendataans.index');
Route::get('/pendataan/create', [PendataanController::class, 'create'])->name('pendataans.create');
Route::post('/pendataan', [PendataanController::class, 'store'])->name('pendataans.store');
Route::get('/pendataan/{id}/edit', [PendataanController::class, 'edit'])->name('pendataans.edit');
Route::put('/pendataan/{id}', [PendataanController::class, 'update'])->name('pendataans.update');
Route::delete('/pendataan/{id}', [PendataanController::class, 'destroy'])->name('pendataans.destroy');


require __DIR__.'/auth.php';
