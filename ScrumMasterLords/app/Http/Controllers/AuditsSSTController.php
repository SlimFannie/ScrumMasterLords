<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $nom_employer = $request->get('nomEmploye');
        $lieux_travail = $request->get('lieux');
        $date = $request->get('date');
        $epi_conforme = $request->get('epiConf');
        $epi_non_conforme = $request->get('epiNonConf'); //5
        $epi_na = $request->get('epiNA');
        $tenue_lieux_conforme = $request->get('lieuxConf');
        $tenue_lieux_non_conforme = $request->get('lieuxNonConf');
        $tenue_lieux_na = $request->get('lieuxNA');
        $comportement_securitaire_conforme = $request->get('compConf'); //10
        $comportement_securitaire_non_conforme = $request->get('compNonConf');
        $comportement_securitaire_na = $request->get('compNA');
        $signalisation_conforme = $request->get('signConf');
        $signalisation_non_conforme = $request->get('signNonConf');
        $signalisation_na = $request->get('signNA'); //15
        $fiches_signaletique_conforme = $request->get('fichesConf');
        $fiches_signaletique_non_conforme = $request->get('fichesNonConf');
        $fiches_signaletique_na = $request->get('fichesNA');
        $travaux_excavation_conforme = $request->get('travConf');
        $travaux_excavation_non_conforme = $request->get('travNonConf'); //20
        $travaux_excavation_na = $request->get('travNA');
        $espace_clos_conforme = $request->get('espConf');
        $espace_clos_non_conforme = $request->get('espNonConf');
        $espace_clos_na = $request->get('espNA');
        $methode_travail_conforme = $request->get('methodeConf'); //25
        $methode_travail_non_conforme = $request->get('methodeNonConf');
        $methode_travail_na = $request->get('methodeNA');
        $autre = $request->get('autre');
        $autre_conforme = $request->get('autreConf');
        $autre_non_conforme = $request->get('autreNonConf'); //30
        $autre_na = $request->get('autreNA');
        $respect_distanciation_conforme = $request->get('distanciationConf');
        $respect_distanciation_non_conforme = $request->get('distanciationNonConf');
        $respect_distanciation_na = $request->get('distanciationNA');
        $port_epi_conforme = $request->get('epiConf'); //35
        $port_epi_non_conforme = $request->get('epiNonConf');
        $port_epi_na = $request->get('epiNA');
        $respect_procedures_etablies_conforme = $request->get('proceduresConf');
        $respect_procedures_etablies_non_conforme = $request->get('proceduresNonConf');
        $respect_procedures_etablies_na = $request->get('proceduresNA'); //40
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
