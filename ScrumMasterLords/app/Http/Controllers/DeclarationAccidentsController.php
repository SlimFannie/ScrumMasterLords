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
        // DB::select('select id, nom_formulaire, nom_employer, date_accident where matricule_usager = ? or ? = ANY (select matricule_usager where ');

        return View('formulaires.formAccidentTravail');
    }

    //requete fait fout avoir les information d'un seul formulaire.
    public function selectOneForm()
    {
        DB::select('select * from formulaire_declaration_accident_travails where id = ?');
    }

    //
    public function selectForm()
    {
        DB::select('select id, nom_formulaire, nom_employer, date_accident 
        from formulaire_declaration_accident_travails 
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
        $fonction = $request->get('fonction');
        $date_accident = $request->get('date_accident');
        $nom_temoin1 = $request->get('nom_temoin1');
        $nom_temoin2 = $request->get('nom_temoin2'); //5
        $tete = $request->get('tete');
        $visage = $request->get('visage');
        $nez = $request->get('nez');
        $oeil_gauche = $request->get('oeil_gauche');
        $oeil_droite = $request->get('oeil_droite'); //10
        $oreille_gauche = $request->get('oreille_gauche');
        $oreille_droite = $request->get('oreille_droite');
        $torse = $request->get('torse');
        $poumon = $request->get('poumon');
        $bras_gauche = $request->get('bras_gauche'); //15
        $bras_droite = $request->get('bras_droite');
        $epaule_gauche = $request->get('epaule_gauche');
        $epaule_droite = $request->get('epaule_droite');
        $coude_gauche = $request->get('coude_gauche');
        $coude_droite = $request->get('coude_droite'); //20
        $poignet_gauche = $request->get('poignet_gauche');
        $poignet_droite = $request->get('poignet_droite');
        $main_gauche = $request->get('main_gauche');
        $main_droite = $request->get('main_droite');
        $doigt = $request->get('doigt'); //25
        $dos = $request->get('dos');
        $hanche = $request->get('hanche');
        $jambre_gauche = $request->get('jambre_gauche');
        $jambre_droite = $request->get('jambre_droite');
        $pied_gauche = $request->get('pied_gauche'); //30
        $pied_droite = $request->get('pied_droite');
        $orteils = $request->get('orteils');
        $chevilles_gauche = $request->get('chevilles_gauche');
        $chevilles_droite = $request->get('chevilles_droite');
        $brulure = $request->get('brulure'); //35
        $engelure = $request->get('engelure');
        $commotion_cerebrale = $request->get('commotion_cerebrale');
        $corps_etranger = $request->get('corps_etranger');
        $coupure = $request->get('coupure');
        $laceration = $request->get('laceration'); //40
        $dechirure = $request->get('dechirure');
        $douleur_dos = $request->get('douleur_dos');
        $egratignure = $request->get('egratignure');
        $eraflure = $request->get('eraflure');
        $piqure = $request->get('piqure'); //45
        $echarde = $request->get('echarde');
        $entorse = $request->get('entorse');
        $elongation = $request->get('elongation');
        $contusion = $request->get('contusion');
        $foulure = $request->get('foulure'); //50
        $luxation = $request->get('luxation');
        $fracture = $request->get('fracture');
        $amputation = $request->get('amputation');
        $irritation = $request->get('irritation');
        $infection = $request->get('infection'); //55
        $inhalation = $request->get('inhalation');
        $violence_physique = $request->get('violence_physique');
        $violence_verbale = $request->get('violence_verbale');
        $description = $request->get('description');
        $premiers_soins = $request->get('premiers_soins'); //60
        $nom_secouriste = $request->get('nom_secouriste');
        $accident_sans_absence = $request->get('accident_sans_absence');
        $accident_avec_consultation_medical = $request->get('accident_avec_consultation_medical');
        $matricule_usager = $request->get('matricule_usager');
        /*$avis_superieur = $request->get('avis_superieur'); //65
        $date_avis = $request->get('date_avis');
        $signature_superieur = $request->get('signature_superieur');
        $no_poste_superieur = $request->get('no_poste_superieur');
        $date_signature_employer = $request->get('date_signature_employer');
        $etat = $request->get('etat');
        $date_creation = $request->get('date_creation'); */
        

        DB::insert('insert into formulaire_declaration_accident_travails (
        nom_employer, fonction, date_accident, nom_temoin1, nom_temoin2,
        tete, visage, nez, oeil_gauche, oeil_droite,
        oreille_gauche, oreille_droite, torse, poumon, bras_gauche, 
        bras_droite, epaule_gauche, epaule_droite, coude_gauche, coude_droite, 
        poignet_gauche, poignet_droite, main_gauche, main_droite, doigt,
        dos, hanche, jambre_gauche, jambre_droite, pied_gauche, 
        pied_droite, orteils, chevilles_gauche, chevilles_droite, brulure,
        engelure, commotion_cerebrale, corps_etranger, coupure, laceration, 
        dechirure, douleur_dos, egratignure, eraflure, piqure, 
        echarde, entorse, elongation, contusion, foulure, 
        luxation, fracture, amputation, irritation, infection, 
        inhalation, violence_physique, violence_verbale, description, premiers_soins, 
        nom_secouriste, accident_sans_absence, accident_avec_consultation_medical, matricule_usager,
        ) values 
         (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?) ',/*avis_superieur, nom_superieur, date_avis, signature_superieur, no_poste_superieur, 
        date_signature_employer, etat, date_creation*/
        [$nom_employer, $fonction, $date_accident, $nom_temoin1, $nom_temoin2, 
        $tete, $visage, $nez, $oeil_gauche, $oeil_droite, 
        $oreille_droite, $oreille_gauche, $torse, $poumon, $bras_gauche,
        $bras_droite, $epaule_gauche, $epaule_droite, $coude_gauche, $coude_droite,
        $poignet_gauche, $poignet_droite, $main_gauche, $main_droite, $doigt, 
        $dos, $hanche, $jambre_gauche, $jambre_droite, $pied_gauche, 
        $pied_droite, $orteils, $chevilles_gauche, $chevilles_droite, $brulure, 
        $engelure, $commotion_cerebrale, $corps_etranger, $coupure, $laceration, 
        $dechirure, $douleur_dos, $egratignure, $eraflure, $piqure, 
        $echarde, $entorse, $elongation, $contusion, $foulure, 
        $luxation, $fracture, $amputation, $irritation, $infection, 
        $inhalation, $violence_physique, $violence_verbale, $description, $premiers_soins, 
        $nom_secouriste, $accident_sans_absence, $accident_avec_consultation_medical, $matricule_usager,
        /*$avis_superieur, $nom_superieur, $date_avis, $signature_superieur, $no_poste_superieur, 
        $date_signature_employer, $etat, $date_creation*/]);
        
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
