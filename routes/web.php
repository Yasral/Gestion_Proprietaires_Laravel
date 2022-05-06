<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/proprietaire', [ProprietaireController::class, 'create']);
Route::post('/proprietaire', [ProprietaireController::class, 'store']);
Route::get('/proprietaire/liste', [ProprietaireController::class, 'show']);

Route::get('/proprietaire/edit/{id}', [ProprietaireController::class, 'updateDetail']);
Route::post('/proprietaire/edit/{id}', [ProprietaireController::class, 'edit']);
Route::get('/proprietaire/delete/{id}', [ProprietaireController::class, 'destroy']);

require __DIR__.'/auth.php';