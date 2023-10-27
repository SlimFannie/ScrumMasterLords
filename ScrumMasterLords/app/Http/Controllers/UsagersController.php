<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Usager;
use Illuminate\View\View;
use Illuminate\Auth\Middleware;
use Auth;
use DB;
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
            $user = Usager::where([['matricule','=',$request->inputMatricule], ['mdp',$request->inputPassword]])->first();

            if($user)
                {
                    Session::put('id', $user->id);
                    Session::put('prenom', $user->prenom);
                    Session::put('nom', $user->nom);
                    return View('welcome', compact('user'));
                }
            else
                {
                    $errorid = "Vos identifiants sont erronés";
                } 
        }
        catch(\Throwable $e)
        {
            Log::debug($e);
        } 
    }
}
