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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::resource('proprietaire', [ProprietaireController::class, 'create']);

    Route::get('/proprietaire', [ProprietaireController::class, 'create'])->name('proprietaire.creer');
    Route::post('/proprietaire', [ProprietaireController::class, 'store'])->name('proprietaire.sauvegarder');
    Route::get('/proprietaire/liste', [ProprietaireController::class, 'show'])->name('proprietaire.liste');
    
    Route::get('/proprietaire/edit/{id}', [ProprietaireController::class, 'updateDetail']);
    Route::post('/proprietaire/edit/{id}', [ProprietaireController::class, 'edit']);
    Route::get('/proprietaire/delete/{id}', [ProprietaireController::class, 'destroy']);
    
    Route::get('/propriete', [ProprieteController::class, 'create'])->name('propriete.creer');
    Route::post('/propriete', [ProprieteController::class, 'store'])->name('propriete.sauvegarder');
    Route::get('/propriete/liste', [ProprieteController::class, 'show'])->name('propriete.liste');
    
    Route::get('/propriete/edit/{id}', [ProprieteController::class, 'updateDetail']);
    Route::post('/propriete/edit/{id}', [ProprieteController::class, 'edit']);
    Route::get('/propriete/delete/{id}', [ProprieteController::class, 'destroy']);
    
});

require __DIR__.'/auth.php';