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

    public function ruleAccident() {
        return [
            'nom' => 'required|regex:/^([^0-9]*)$/',
            'prenom' => 'required|regex:/^([^0-9]*)$/',
            'matricule' => 'required|numeric|digits_between:7,7',
            'fonction' => 'required',
            'dateHeure' => 'required',
            'lieu' => 'required'
        ];
    }

    public function messageAccident() {
        return [
            'nom.required' => 'Vous devez entrer votre nom.',
            'nom.regex:/^([^0-9]*)$/' => 'Ce champs ne peut pas contenir de chiffres.',
            'prenom.required' => 'Vous devez entrer votre prénom.',
            'prenom.regex:/^([^0-9]*)$/' => 'Ce champs ne peut pas contenir de chiffres.',
            'matricule.required' => 'Vous devez entrer un matricule.',
            'matricule.numeric' => 'Ce champs doit contenir 7 (sept) chiffres.',
            'matricule.digits_between:7,7' => 'Ce champs doit contenir 7 (sept) chiffres.',
            'fonction.required' => 'Vous devez entrer votre fonction.',
            'dateHeure' => 'Vous devez entrer une date et une heure.',
            'lieu' => 'Vous devez entrer un lieu.'
        ];
    }

    public function accidentStore(Request $request) {
            $requestAccident = $request->all();
            $rulesAccident = self::ruleAccident();
            $messagesAccident = self::messageAccident();

            $validator = Validator::make($requestAccident, $rulesAccident, $messagesAccident);

            if($validator->fails()) {
                return back()->withErrors($validator);
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

    /* Atelier mécanique */

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

    /* Situation dangereuse */

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
