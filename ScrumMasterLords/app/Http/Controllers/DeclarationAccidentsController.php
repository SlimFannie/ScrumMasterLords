<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DeclarationAccidentsController extends Controller
{
    //requete pour avoir des informations générales pour
    // les formulaires des ses employers
    public function index()
    {
        DB::select('select id, nom_formulaire, nom_employer, date_accident 
        from formulaire_declaration_accident_travails 
        where matricule_usager = ? or ? = 
        ANY (select matricule_usager where ? = matricule_superieur)');
        return View('formulaires.formAccidentTravail');
    }

    //requete fait fout avoir les information d'un seul formulaire.
    public function selectOneForm()
    {
        DB::select('select * from formulaire_declaration_accident_travails where id = ?');
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
        $fonction = $request->get('fonction');
        $date_accident = $request->get('date_accident');
        $nom_temoin1 = $request->get('nom_temoin1');
        $nom_temoin2 = $request->get('nom_temoin2');
        $tete = $request->get('tete');
        $visage = $request->get('visage');
        $nez = $request->get('nez');
        $yeux = $request->get('yeux');
        $oreille = $request->get('oreille');
        $torse = $request->get('torse');
        $poumon = $request->get('poumon');
        $bras = $request->get('bras');
        $epaule = $request->get('epaule');
        $coude = $request->get('coude');
        $poignet = $request->get('poignet');
        $main = $request->get('main');
        $doigt = $request->get('doigt');
        $dos = $request->get('dos');
        $hanche = $request->get('hanche');
        $jambre = $request->get('jambre');
        $pied = $request->get('pied');
        $autre_place = $request->get('autre_place');
        $brulure = $request->get('brulure');
        $engelure = $request->get('engelure');
        $commotion_cerebrale = $request->get('commotion_cerebrale');
        $corps_etranger = $request->get('corps_etranger');
        $coupure = $request->get('coupure');
        $laceration = $request->get('laceration');
        $dechirure = $request->get('dechirure');
        $douleur_dos = $request->get('douleur_dos');
        $egratignure = $request->get('egratignure');
        $eraflure = $request->get('eraflure');
        $piqure = $request->get('piqure');
        $echarde = $request->get('echarde');
        $entorse = $request->get('entorse');
        $elongation = $request->get('elongation');
        $contusion = $request->get('contusion');
        $foulure = $request->get('foulure');
        $luxation = $request->get('luxation');
        $fracture = $request->get('fracture');
        $amputation = $request->get('amputation');
        $irritation = $request->get('irritation');
        $infection = $request->get('infection');
        $inhalation = $request->get('inhalation');
        $violence_physique = $request->get('violence_physique');
        $violence_verbale = $request->get('violence_verbale');
        $description = $request->get('description');
        $premiers_soins = $request->get('premiers_soins');
        $nom_secouriste = $request->get('nom_secouriste');
        $accident_sans_absence = $request->get('accident_sans_absence');
        $accident_avec_consultation_medical = $request->get('accident_avec_consultation_medical');
        $avis_superieur = $request->get('avis_superieur');
        $date_avis = $request->get('date_avis');
        $signature_superieur = $request->get('signature_superieur');
        $no_poste_superieur = $request->get('no_poste_superieur');
        $date_signature_employer = $request->get('date_signature_employer');
        $etat = $request->get('etat');
        $matricule_usager = $request->get('matricule_usager');
        $date_creation = $request->get('date_creation');
        

        DB::insert('insert into formulaire_declaration_accident_travails (nom_employer, fonction, date_accident,
         nom_temoin1, nom_temoin2, tete, visage, nez, yeux, oreille, torse, poumon, bras, epaule, coude, poignet, 
         main, doigt, dos, hanche, jambre, pied, autre_place, brulure, engelure, commotion_cerebrale, corps_etranger,
         coupure, laceration, dechirure, douleur_dos, egratignure, eraflure, piqure, echarde, entorse, elongation, 
         contusion, foulure, luxation, fracture, amputation, irritation, infection, inhalation, violence_physique, 
         violence_verbale, description, premiers_soins, nom_secouriste, accident_sans_absence, 
         accident_avec_consultation_medical, avis_superieur, nom_superieur, date_avis, signature_superieur, no_poste_superieur,
         date_signature_employer, etat, matricule_usager, date_creation) values 
         (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
          ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,) ',
        [$nom_employer, $fonction, $date_accident,
         $nom_temoin1, $nom_temoin2, $tete, $visage, $nez, $yeux, $oreille, $torse, $poumon, $bras, $epaule, $coude, $poignet, 
         $main, $doigt, $dos, $hanche, $jambre, $pied, $autre_place, $brulure, $engelure, $commotion_cerebrale, $corps_etranger,
         $coupure, $laceration, $dechirure, $douleur_dos, $egratignure, $eraflure, $piqure, $echarde, $entorse, $elongation, 
         $contusion, $foulure, $luxation, $fracture, $amputation, $irritation, $infection, $inhalation, $violence_physique, 
         $violence_verbale, $description, $premiers_soins, $nom_secouriste, $accident_sans_absence, 
         $accident_avec_consultation_medical, $avis_superieur, $nom_superieur, $date_avis, $signature_superieur, $no_poste_superieur,
         $date_signature_employer, $etat, $matricule_usager, $date_creation]);
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
