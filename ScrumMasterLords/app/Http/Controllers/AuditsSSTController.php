<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuditsSSTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('formulaires.formAuditSST');
    }

    //requete fait fout avoir les information d'un seul formulaire.
    public function selectOneForm()
    {
        DB::select('select * from formulaire_grille_audits where id = ?');
    }

    public function selectForm()
    {
        DB::select('select id, nom_formulaire, nom_employer, date 
        from formulaire_grille_audits 
        where matricule_usager = ? or ? = 
        ANY (select matricule_usager where ? = matricule_superieur)');
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
        $nom_employer = $request->get('nom_employer');
        $lieux_travail = $request->get('lieux_travail');
        $date = $request->get('date');
        $epi_conforme = $request->get('epi_conforme');
        $epi_non_conforme = $request->get('epi_non_conforme'); //5
        $epi_na = $request->get('epi_na');
        $tenue_lieux_conforme = $request->get('tenue_lieux_conforme');
        $tenue_lieux_non_conforme = $request->get('tenue_lieux_non_conforme');
        $tenue_lieux_na = $request->get('tenue_lieux_na');
        $comportement_securitaire_conforme = $request->get('comportement_securitaire_conforme'); //10
        $comportement_securitaire_non_conforme = $request->get('comportement_securitaire_non_conforme');
        $comportement_securitaire_na = $request->get('comportement_securitaire_na');
        $signalisation_conforme = $request->get('signalisation_conforme');
        $signalisation_non_conforme = $request->get('signalisation_non_conforme');
        $signalisation_na = $request->get('signalisation_na'); //15
        $fiches_signaletique_conforme = $request->get('fiches_signaletique_conforme');
        $fiches_signaletique_non_conforme = $request->get('fiches_signaletique_non_conforme');
        $fiches_signaletique_na = $request->get('fiches_signaletique_na');
        $travaux_excavation_conforme = $request->get('travaux_excavation_conforme');
        $travaux_excavation_non_conforme = $request->get('travaux_excavation_non_conforme'); //20
        $travaux_excavation_na = $request->get('travaux_excavation_na');
        $espace_clos_conforme = $request->get('espace_clos_conforme');
        $espace_clos_non_conforme = $request->get('espace_clos_non_conforme');
        $espace_clos_na = $request->get('espace_clos_na');
        $methode_travail_conforme = $request->get('methode_travail_conforme'); //25
        $methode_travail_non_conforme = $request->get('methode_travail_non_conforme');
        $methode_travail_na = $request->get('methode_travail_na');
        $autre = $request->get('autre');
        $autre_conforme = $request->get('autre_conforme');
        $autre_non_conforme = $request->get('autre_non_conforme'); //30
        $autre_na = $request->get('autre_na');
        $respect_distanciation_conforme = $request->get('respect_distanciation_conforme');
        $respect_distanciation_non_conforme = $request->get('respect_distanciation_non_conforme');
        $respect_distanciation_na = $request->get('respect_distanciation_na');
        $port_epi_conforme = $request->get('port_epi_conforme'); //35
        $port_epi_non_conforme = $request->get('port_epi_non_conforme');
        $port_epi_na = $request->get('port_epi_na');
        $respect_procedures_etablies_conforme = $request->get('respect_procedures_etablies_conforme');
        $respect_procedures_etablies_non_conforme = $request->get('respect_procedures_etablies_non_conforme');
        $respect_procedures_etablies_na = $request->get('respect_procedures_etablies_na'); //40
        $description = $request->get('description');

        DB::insert('insert into formulaire_grille_audits (
            nom_employer, lieux_travail, date, epi_conforme, epi_non_conforme,
            epi_na, tenue_lieux_conforme, tenue_lieux_non_conforme, tenue_lieux_na, comportement_securitaire_conforme,
            comportement_securitaire_non_conforme, comportement_securitaire_na, signalisation_conforme, signalisation_non_conforme, signalisation_na,
            fiches_signaletique_conforme, fiches_signaletique_non_conforme, fiches_signaletique_na, travaux_excavation_conforme, travaux_excavation_non_conforme,
            travaux_excavation_na, espace_clos_conforme, espace_clos_non_conforme, espace_clos_na, methode_travail_conforme, 
            methode_travail_non_conforme, methode_travail_na, autre, autre_conforme, autre_non_conforme,
            autre_na, respect_distanciation_conforme, respect_distanciation_non_conforme, respect_distanciation_na, port_epi_conforme,
            port_epi_non_conforme, port_epi_na, respect_procedures_etablies_conforme, respect_procedures_etablies_non_conforme, respect_procedures_etablies_na,
            description
            ) values 
             (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
             ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
             ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
             ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
             ?) ',
            [$nom_employer, $lieux_travail, $date, $epi_conforme, $epi_non_conforme,
            $epi_na, $tenue_lieux_conforme, $tenue_lieux_non_conforme, $tenue_lieux_na, $comportement_securitaire_conforme,
            $comportement_securitaire_non_conforme, $comportement_securitaire_na, $signalisation_conforme, $signalisation_non_conforme, $signalisation_na,
            $fiches_signaletique_conforme, $fiches_signaletique_non_conforme, $fiches_signaletique_na, $travaux_excavation_conforme, $travaux_excavation_non_conforme,
            $travaux_excavation_na, $espace_clos_conforme, $espace_clos_non_conforme, $espace_clos_na, $methode_travail_conforme, 
            $methode_travail_non_conforme, $methode_travail_na, $autre, $autre_conforme, $autre_non_conforme,
            $autre_na, $respect_distanciation_conforme, $respect_distanciation_non_conforme, $respect_distanciation_na, $port_epi_conforme,
            $port_epi_non_conforme, $port_epi_na, $respect_procedures_etablies_conforme, $respect_procedures_etablies_non_conforme, $respect_procedures_etablies_na,
            $description]);
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
