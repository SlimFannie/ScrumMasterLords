<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormulairesController;
use App\Http\Controllers\SituationDangerController;
use App\Http\Controllers\DeclarationAccidentsController;
use App\Http\Controllers\AuditsSSTController;
use App\Http\Controllers\AtelierMecaniquesController;
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

Route::get('/', function () {
    return view('connexion');
})->name('connexion');

Route::get('/{username}', 
[FormulairesController::class, 'index'])->name('formulaires.index');

Route::POST('/connexion',
[UsagersController::class, 'login'])->name('usagers.login');

Route::POST('/déconnexion',
[UsagersController::class, 'logout'])->name('usagers.logout');


/* Situation dangereuse */

Route::get('/{username}/formSituationDangereuse',
[FormulairesController::class, 'danger'])->name('formulaires.danger');

Route::post('/storeSituationDanger',
[SituationDangerController::class, 'store'])->name('danger.store');


/* Accident de travail */

Route::get('/{username}/AccidentTravail',
[FormulairesController::class, 'accident'])->name('formulaires.accident');

Route::POST('/storeAccidentTravail',
[FormulairesController::class, 'storeAccident'])->name('formulaires.storeAccident');


/* Audit SST */

Route::get('/{username}/AuditSST',
[FormulairesController::class, 'audit'])->name('formulaires.audit');

Route::get('/storeAuditSST',
[AuditsSSTController::class, 'store'])->name('audit.store');


/* Atelier mécanique */

Route::get('/{username}/formAtelierMecanique',
[FormulairesController::class, 'atelier'])->name('formulaires.atelier');

Route::get('/storeAtelierMecanique',
[AtelierMecaniquesController::class, 'store'])->name('atelier.store');


/* Procédures de travail */

Route::get('/{username}/procedures',
[ProceduresTravailController::class, 'index'])->name('procedures.index');

