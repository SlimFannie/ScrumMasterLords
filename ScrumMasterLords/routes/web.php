<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormulairesController;
use App\Http\Controllers\ProceduresTravailController;

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

/* Connexion */

Route::get('/', function () {
    return view('connexion');
})->name('connexion');

Route::POST('/connexion',
[UsagersController::class, 'login'])->name('usagers.login');

Route::get('/déconnexion',
[UsagersController::class, 'logout'])->name('usagers.logout');

Route::get('/{username}',
[FormulairesController::class, 'index'])->name('dashboard');

/* Accident de travail */

Route::get('/{username}/AccidentDeTravail',
[FormulairesController::class, 'accident'])->name('formulaires.accident');

Route::POST('/{username}/AccidentDeTravail/Envoi',
[FormulairesController::class, 'storeAccident'])->name('store.accident');

/* Audit SST */

Route::get('/{username}/AuditSST',
[FormulairesController::class, 'audit'])->name('formulaires.audit');

Route::POST('/{username}/AuditSST/Envoi',
[FormulairesController::class, 'storeAuditSST'])->name('store.audit');

/* Danger */

Route::get('/{username}/Danger',
[FormulairesController::class, 'danger'])->name('formulaires.danger');

Route::POST('/{username}/Danger/Envoi',
[FormulairesController::class, 'storeDanger'])->name('store.danger');

/* Atelier mécanique */

Route::get('/{username}/AtelierMecanique',
[FormulairesController::class, 'atelierMecanique'])->name('formulaires.atelier');

Route::POST('/{username}/AtelierMecanique/Envoi',
[FormulairesController::class, 'storeAtelierMecanique'])->name('store.atelier');


/* Procédures de travail */

Route::get('/{username}/procedures',
[ProceduresTravailController::class, 'index'])->name('procedures.index');

/* Autre */

Route::get('/formulaire/{id}',
[FormulairesController::class, 'show'])->name('show.form');