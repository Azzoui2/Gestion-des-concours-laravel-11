<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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
Route::get('/etudiante', [EtudiantController::class, 'listEtudiant']);
Route::get('/', [EtudiantController::class, 'listEtudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouterEtudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouterEtudiant_traitement']);
Route::delete('/etudiante/supprimer/{id}', [EtudiantController::class, 'supprimerEtudiant']);
Route::get('/about', function () {return view('about');});


