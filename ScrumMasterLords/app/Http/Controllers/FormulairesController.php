<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use App\Models\Usager;
use App\Models\Mecanique;
use App\Models\Accident;
use App\Models\Danger;
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

    public function accidentStore(Request $request) {
            Log::debug("fail");
            $requestAccident = $request->all();
            $validator = Validator::make($request->all(), [
                'nom' => 'required|regex:/^([^0-9]*)$/',
                'prenom' => 'required|regex:/^([^0-9]*)$/',
                'matricule' => 'required|numeric|digits_between:7,7',
                'fonction' => 'required',
                'dateHeure' => 'required',
                'lieu' => 'required'
            ]);

            if($validator->fails()) {
                Log::debug("fail");
                return back()->withErrors(['invalide' => 'Vos identifiants sont erronés ou invalides. Réessayez de nouveau ou contactez un administrateur.']);
            } else {
                Log::debug("success");
                $accident = Accident::create($requestAccident);
                return redirect()->View('welcome')->with('username', self::getUsername());
            }
    }

    /* Audit SST */
    
    public function audit() {

        return View('formulaires.formAuditSST')->with('username', self::getUsername());
    }

    public function auditStore(Request $request) {
        try {
            $audit = new Audit($request->all());
            $audit->save();
            return View('welcome')->with('username', self::getUsername());
        } catch (\Throwable $e) {
            Log::debug($e);
        }
    }

    public function atelier() {
        return View('formulaires.formAtelierMecanique')->with('username', self::getUsername());
    }

    public function atelierStore(Request $request) {
        try {
            $atelier = new Mecanique($request->all());
            $atelier->save();
            return View('welcome')->with('username', self::getUsername());
        } catch (\Throwable $e) {
            Log::debug($e);
        }
    }

    public function danger() {
        return View('formulaires.formDanger')->with('username', self::getUsername());
    }

    public function dangerStore() {
        try {
            $danger = new Danger($request->all());
            $danger->save();
            return View('welcome')->with('username', self::getUsername());
        } catch (\Throwable $e) {
            Log::debug($e);
        }
    }

    public function getUsername() {
        return $username = Session::get('prenom').Session::get('nom');
    }

}
