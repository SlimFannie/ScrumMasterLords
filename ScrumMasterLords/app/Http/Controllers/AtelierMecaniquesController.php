<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AtelierMecaniqueRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Formulaire_atelier_mecanique_rapport_accident;
use Illuminate\Support\Facades\Log;

class AtelierMecaniquesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('formulaires.formAtelierMecanique');
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
            try {
                $no_unite = $request->get('num');
                $departement = $request->get('dep');
                $nom_complet_employer = $request->get('nom');
                $nom_complet_superieur = $request->get('nomSup');
                $numero_permis_conduire = $request->get('numPermis'); //5
                $autre_vehicule_vrai = $request->get('flexRadioDefault1');
                $autre_vehicule_faux = $request->get('flexRadioDefault2');
                DB::insert('insert into formulaire_atelier_mecanique_rapport_accidents (
                no_unite, departement, nom_complet_employer, nom_complet_superieur, no_permis_conduite_employer,
                autre_vehicules_vrai, autre_vehicules_faux
                ) values 
                (?, ?, ?, ?, ?,
                ?, ?)',
                ["Hello Word", "Here", "is", "my", "proof",
                $autre_vehicule_vrai, $autre_vehicule_faux]);
                
                //$declarationAccident = new Formulaire_declaration_accident_travail($request->all());
                //$declarationAccident->save();
                //$atelier = new Formulaire_atelier_mecanique_rapport_accident($request->all());
                //$atelier->save();
                }
                catch (\Throwable $e) {
                    Log::debug($e);
                    
                }
                return redirect()->route('atelier.index');
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
}
