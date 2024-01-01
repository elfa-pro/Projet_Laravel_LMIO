<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;

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

// Les Routes pour l'affichage de la page de connexion, d'inscription et d'accueil.
Route::get('/', [ConnexionController::class, 'index']);
Route::get('/connexion', [ConnexionController::class, 'form_connexion']);
Route::get('/inscription', [ConnexionController::class, 'form_inscription']);
Route::get('/accueil', [ConnexionController::class, 'page_accueil']);

// Les Routes pour le traitement de la page de connexion et d'inscription.
Route::post('/traitement/connexion', [ConnexionController::class, 'traitement_form_connexion']);
Route::post('/traitement/inscription', [ConnexionController::class, 'traitement_form_inscription']);
