<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\SituationDangerController;
use App\Http\Controllers\DeclarationAccidentsController;
use App\Http\Controllers\AuditsSSTController;
use App\Http\Controllers\AtelierMecaniquesController;

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

Route::get('/connexion', function () {
    return view('connexion');
});

Route::POST('/connexion',
[UsagersController::class, 'login'])->name('usagers.login');

Route::get('/formSituationDangereuse',
[SituationDangerController::class, 'index'])->name('danger.index');

Route::post('/storeSituationDanger',
[SituationDangerController::class, 'store'])->name('danger.store');

Route::get('/formAccidentTravail',
[DeclarationAccidentsController::class, 'index'])->name('accident.index');

Route::POST('/storeAccidentTravail',
[DeclarationAccidentsController::class, 'store'])->name('accident.store');

Route::get('/formAuditSST',
[AuditsSSTController::class, 'index'])->name('audit.index');

Route::get('/storeAuditSST',
[AuditsSSTController::class, 'store'])->name('audit.store');

Route::get('/formAtelierMecanique',
[AtelierMecaniquesController::class, 'index'])->name('atelier.index');

Route::get('/storeAtelierMecanique',
[AtelierMecaniquesController::class, 'store'])->name('atelier.store');
