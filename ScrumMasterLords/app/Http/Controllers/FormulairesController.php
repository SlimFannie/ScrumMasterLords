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
        $formulaires = $usager->formulaires()->where('lu', false)->get();
        $historiques = $usager->formulaires()->where('lu', true)->get();

        return View('welcome', ['formulaires'=>$formulaires, 'historiques'=>$historiques]);
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
            'endroitBlessure' => ['required'],
            'descriptionBlessure' => ['required'],
            'histoire' => ['required'],
            'superieur' => ['required']
        ]);

        if($validator->fails()) {
            return redirect()->route('formulaires.danger', ['username'=>Session::get('username')])->withErrors($validator)->withInput();
        } else {
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
