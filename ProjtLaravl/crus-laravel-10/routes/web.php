<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\RegisterController;

// Page d'accueil
Route::get('/', fn () => redirect('/login'));

// Routes des étudiants
Route::get('/list', [EtudiantController::class, 'Liste_Etudiant']);
Route::get('/Ajouter', [EtudiantController::class, 'Ajouter_Etudiant']);
Route::post('/Ajouter/trait', [EtudiantController::class, 'Ajouter_Etudiant_trait']);

// Routes d'authentification
Route::get('/login', [RegisterController::class, 'loginforme']); // Affiche le formulaire de login
Route::post('/login', [RegisterController::class, 'login']); // Traite la connexion

Route::get('/register', [RegisterController::class, 'signUpforme']); // Affiche le formulaire d'inscription
Route::post('/register', [RegisterController::class, 'signUp']); // Traite l'inscription
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');
 Route::get('/Modifier/{id}', [EtudiantController::class, 'modifier']);
Route::put('/Modifier/trait/{id}', [EtudiantController::class, 'modifierTrait'])->name('etudiant.modifier.trait');
    
    // Supprimer un étudiant
Route::post('/Supprimer/{id}', [EtudiantController::class, 'supprimer'])->name('etudiant.supprimer');
    
    