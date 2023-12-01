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
        $formulaires = $usager->formulaires;
        $notifications = self::getNotif();

        return View('welcome', ['formulaires'=>$formulaires, 'notifications'=>$notifications]);
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

    // Atelier

    // Général

    public function getNotif() {
        $usager = Usager::find(Session::get('user.id'));
        $formulaires = $usager->formulaires->contains('superieur', true);
    }

}
