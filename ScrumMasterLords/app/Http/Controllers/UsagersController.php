<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

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

    public function connection(string $matricule, string $mdp)
    {
        $connection = DB::select("select count(matricule) from usagers where matricule = $matricule and mdp = $mdp");

        if ($connection = 1)
        {
            $info = DB::select('select matricule, nom, prenom, image, nbr_notif, matricule_superieur, admin from usagers where matricule = ? and mdp = ?');

            //return view('', ['usagers' => $info])
        }
        

        
    }
}
