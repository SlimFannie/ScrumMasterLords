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
        $username = Session::get('prenom').Session::get('nom');
        return View('welcome')->with('username', $username);
    }

}
