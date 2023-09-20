<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SituationDangerController;
use App\Http\Controllers\DeclarationAccidentsController;
use App\Http\Controllers\AuditsSSTController;

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

Route::get('/situationDanger',
[SituationDangerController::class, 'index'])->name('danger.index');

Route::get('/formAccidentTravail',
[DeclarationAccidentsController::class, 'index'])->name('accident.index');

Route::get('/formAuditSST',
[AuditsSSTController::class, 'index'])->name('audit.index');