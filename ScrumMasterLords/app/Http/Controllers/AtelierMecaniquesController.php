<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $no_unite = $request->get('num');
        $departement = $request->get('dep');
        $nom_employer = $request->get('nom');
        $nom_superieur = $request->get('nomSup');
        $numero_permis_conduire = $request->get('numPermis'); //5
        $autre_vehicule_vrai = $request->get('flexRadioDefault1');
        $autre_vehicule_faux = $request->get('flexRadioDefault2');
        DB::insert('insert into formulaire_atelier_mecanique_rapport_accident (
            no_unite, departement, nom_complet_employer, nom_complet_superieur, no_permis_conduite_employer,
            autre_vehicules_vrai, autre_vehicules_faux
            ) values 
             (?, ?, ?, ?, ?,
              ?, ?)',
            [$no_unite, $departement, $nom_complet_employer, $nom_complet_superieur, $no_permis_conduite_employer,
            $autre_vehicules_vrai, $autre_vehicules_faux]);
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
