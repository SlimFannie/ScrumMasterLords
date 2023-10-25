<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;
use App\Http\Requests\UsagerRequest;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use Auth;
use DB;
use Hash;
use Session;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request)
    {   
        try
        {   
            Log::debug($request->matricule);
            $user = Usager::where('matricule','=',$request->inputMatricule)->first();
            if($user && Hash::check($request->inputPassword, $user->mdp))
            {
                Auth::login($user);
                if(Auth::check())
                {
                    Session::put('id', $user->id);
                    Session::put('prenom', $user->prenom);
                    Session::put('nom', $user->nom);
                    return View('accueils.index', compact('user'));
                }
                else
                {
                    return redirect()->route('usagers.login')->withErrors(['message','RIIIP']);
                } 
            }
            {
                return redirect()->route('usagers.login')->withErrors(['message','RIIIP']);
            }
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
        } 
    }
}
