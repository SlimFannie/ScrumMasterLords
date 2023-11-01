<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use App\Models\Usager;
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

    public function accident() {
        return View('formulaires.formAccidentTravail')->with('username', self::getUsername());
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
