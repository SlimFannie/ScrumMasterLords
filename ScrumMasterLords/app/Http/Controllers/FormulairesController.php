<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AccidentRequest; //permet d'avoir ce qu'il faut pour les requests pour accident de travail
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use App\Models\Usager;
use App\Models\Mecanique;
use App\Models\Accident;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use Auth;
use DB;
use Session;
use Validator;

class FormulairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('welcome')->with('username', self::getUsername());
    }

    /* Accident de travail */

    public function accident() {
        return View('formulaires.formAccidentTravail')->with('username', self::getUsername());
    }

    public function storeAccident(Request $request) {
        Log::debug('log avant le try');
        try {
            Log::debug('test save form');
            $accident = new Accident($request->all());
            $accident->save();
            //$declarationAccident = new Formulaire_declaration_accident_travail($request->all());
            //$declarationAccident->save();
            
        } catch (\Throwable $e) {
            Log::debug($e);
        }
        return View('welcome')->with('username', self::getUsername());
    }

    public function showAccident() {

    }
    
    public function audit() {

        return View('formulaires.formAuditSST')->with('username', self::getUsername());
    }

    public function atelier() {
        return View('formulaires.formAtelierMecanique')->with('username', self::getUsername());
    }

    public function danger() {
        return View('formulaires.formDanger')->with('username', self::getUsername());
    }

    public function getUsername() {
        return $username = Session::get('prenom').Session::get('nom');
    }

}
