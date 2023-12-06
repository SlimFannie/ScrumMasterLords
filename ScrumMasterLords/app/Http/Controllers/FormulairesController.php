<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Models\Formulaire;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use DB;
use Session;
use Validator;

class FormulairesController extends Controller
{
    
    public function index() {
        $usager = Usager::find(Session::get('user.id'));
        $formulaires = DB::table('formulaire_usager')->where('usager_id', $usager->id)->get();
        $historiques = $usager->formulaires()->wherePivot('lu', true)->get();

        Log::debug($usager);
        Log::debug($formulaires);
        Log::debug($historiques);

        return View('welcome', ['formulaires'=>$formulaires, 'historiques'=>$historiques, 'usager'=>$usager]);
    }

    public function show(Request $id) {
        $formulaire = DB::table('formulaire_usager')->find($id);

        return View('showForm', ['formulaire'=>$formulaire]);
    }

    // Accident de travail

    public function accident() {
        $superieurs = Usager::where('superieur', true)->get();
        return view('formulaires.formAccidentTravail', ['username'=>Session::get('username'), 'superieurs'=>$superieurs, 'usager'=>Session::get('user')]);
    }

    public function storeAccident(Request $request): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'fonction' => ['required'],
            'dateHeure' => ['required'],
            'endroit' => ['required'],
            'endroitBlessure' => ['required'],
            'descriptionBlessure' => ['required'],
            'histoire' => ['required'],
            'superieur' => ['required']
        ]);

        if($validator->fails()) {
            return redirect()->route('formulaires.accident', ['username'=>Session::get('username')])->withErrors($validator)->withInput();
        } else {
            $formulaire = new Formulaire($request->all());
            $formulaire->save();
            return redirect()->route('dashboard', ['username'=>Session::get('username')]);
        }

    }

    public function showAccident(string $id): View
    {
        return view('show.Accident', [
            'formulaire' => Formulaire::findOrFail($id)
        ]);
    }

    // Danger

    public function danger() {
        return view('formulaires.formDanger', ['username'=>Session::get('username'), 'usager'=>Session::get('user')]);
    }

    public function storeDanger(Request $request): RedirectResponse {
        $validator = Validator::make($request->all(), [
            'fonction' => ['required'],
            'dateHeure' => ['required'],
            'endroit' => ['required'],
            'dEvent' => ['required'],
        ]);

        if($validator->fails()) {
            return redirect()->route('formulaires.danger', ['username'=>Session::get('username')])->withErrors($validator)->withInput();
        } else {
            DB::table('formulaire_usager')->insert([
                'usager_id' => Session::get('user.id'),
                'formulaire_id' => 2,
                'lu' => false,
                'reponse1' => Session::get('user.prenom'),
                'reponse2' => Session::get('user.nom'),
                'reponse3' => Session::get('user.matricule'),
                'reponse4' => $request->fonction,
                'reponse5' => $request->secteur,
                'reponse6' => $request->dateHeure,
                'reponse7' => $request->endroit,
                'reponse8' => $request->dTemoin,
                'reponse9' => $request->dEvent,
                'reponse10' => $request->dCorrection
            ]);
            return redirect()->route('dashboard', ['username'=>Session::get('username')]);
        }

    }

    // Audit

    public function audit() {
        return view('formulaires.formAuditSST', ['username'=>Session::get('username'), 'usager'=>Session::get('user')]);
    }

    public function storeAudit() {
        
    }

    // Atelier

}
