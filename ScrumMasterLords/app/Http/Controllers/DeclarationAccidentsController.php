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
        $nom_employer = $request->get('nom');
        $fonction = $request->get('fonction');
        $date_accident = $request->get('datetime-local');
        $endroit = $request->get('endroit');
        $secteur = $request->get('secteur');//5
        $nom_temoin1 = $request->get('temoin');
        $nom_temoin2 = $request->get('temoin2'); 
        $tete = $request->get('tete');
        $visage = $request->get('visage');
        $nez = $request->get('nez');//10
        $oeil_gauche = $request->get('oeilG');
        $oeil_droite = $request->get('oeilD'); 
        $oreille_gauche = $request->get('oreilleG');
        $oreille_droite = $request->get('oreilleD');
        $torse = $request->get('torse');//15
        $poumon = $request->get('poumon');
        $bras_gauche = $request->get('brasG'); 
        $bras_droite = $request->get('brasD');
        $epaule_gauche = $request->get('epauleG');
        $epaule_droite = $request->get('epauleD');//20
        $coude_gauche = $request->get('coudeG');
        $coude_droite = $request->get('coudeD'); 
        $poignet_gauche = $request->get('poignetG');
        $poignet_droite = $request->get('poignetD');
        $main_gauche = $request->get('mainG'); //25
        $main_droite = $request->get('mainD');
        $doigt = $request->get('doigts');
        $dos = $request->get('dos');
        $hanche = $request->get('hanche');
        $jambre_gauche = $request->get('jambeG');//30
        $jambre_droite = $request->get('jambeD');
        $genoux_gauche = $request->get('genouG');
        $genoux_droite = $request->get('genouD');
        $pied_gauche = $request->get('piedG'); 
        $pied_droite = $request->get('piedD');//35
        $orteils = $request->get('orteil');
        $chevilles_gauche = $request->get('chevilleG');
        $chevilles_droite = $request->get('chevilleD');
        $brulure = $request->get('brulure'); 
        $engelure = $request->get('engelure');//40
        $commotion_cerebrale = $request->get('commotion');
        $corps_etranger = $request->get('corpsEtranger');
        $coupure = $request->get('coupure');
        $laceration = $request->get('laceration'); 
        $dechirure = $request->get('dechirure');//45
        $douleur_dos = $request->get('douleurDos');
        $egratignure = $request->get('egratignure');
        $eraflure = $request->get('eraflure');
        $piqure = $request->get('piqure'); 
        $echarde = $request->get('echarde');//50
        $entorse = $request->get('entorse');
        $elongation = $request->get('elongation');
        $contusion = $request->get('contusion');
        $foulure = $request->get('foulure'); 
        $luxation = $request->get('luxation');//55
        $fracture = $request->get('fracture');
        $amputation = $request->get('amputation');
        $irritation = $request->get('irritation');
        $infection = $request->get('infection'); 
        $inhalation = $request->get('inhalation');//60
        $violence_physique = $request->get('physique');
        $violence_verbale = $request->get('verbale'); 
        $description = $request->get('tache');
        $premiers_soins = $request->get('premierSoin');
        $nom_secouriste = $request->get('secouriste');//65
        $accident_sans_absence = $request->get('aucuneAbsence');
        $accident_avec_consultation_medical = $request->get('consultation'); 
        $matricule_usager = $request->get('matricule'); //68
        /*$avis_superieur = $request->get('avis_superieur'); //65
        $date_avis = $request->get('date_avis');
        $signature_superieur = $request->get('signature_superieur');
        $no_poste_superieur = $request->get('no_poste_superieur');
        $date_signature_employer = $request->get('date_signature_employer');
        $etat = $request->get('etat');
        $date_creation = $request->get('date_creation'); */
        

        DB::insert('insert into formulaire_declaration_accident_travails (
        nom_employer, fonction, date_accident, endroit, secteur,
        nom_temoin1, nom_temoin2, tete, visage, nez, 
        oeil_gauche, oeil_droite, oreille_gauche, oreille_droite, torse, 
        poumon, bras_gauche, bras_droite, epaule_gauche, epaule_droite, 
        coude_gauche, coude_droite, poignet_gauche, poignet_droite, main_gauche,
        main_droite, doigt, dos, hanche, jambre_gauche, 
        jambre_droite, genoux_gauche, genoux_droite, pied_gauche, pied_droite, 
        orteils, chevilles_gauche, chevilles_droite, brulure, engelure, 
        commotion_cerebrale, corps_etranger, coupure, laceration, dechirure, 
        douleur_dos, egratignure, eraflure, piqure, echarde, 
        entorse, elongation, contusion, foulure, luxation, 
        fracture, amputation, irritation, infection, inhalation, 
        violence_physique, violence_verbale, description, premiers_soins, nom_secouriste, 
        accident_sans_absence, accident_avec_consultation_medical, matricule_usager,
        ) values 
         (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
         ?, ?, ?, ?, ?, ?, ?, ?) ',/*avis_superieur, nom_superieur, date_avis, signature_superieur, no_poste_superieur, 
        date_signature_employer, etat, date_creation*/
        [$nom_employer, $fonction, $date_accident, $endroit, $secteur,
        $nom_temoin1, $nom_temoin2, $tete, $visage, $nez, 
        $oeil_gauche, $oeil_droite, $oreille_droite, $oreille_gauche, $torse, 
        $poumon, $bras_gauche, $bras_droite, $epaule_gauche, $epaule_droite, 
        $coude_gauche, $coude_droite, $poignet_gauche, $poignet_droite, $main_gauche, 
        $main_droite, $doigt, $dos, $hanche, $jambre_gauche, 
        $jambre_droite, $genoux_gauche, $genoux_droite, $pied_gauche, $pied_droite, 
        $orteils, $chevilles_gauche, $chevilles_droite, $brulure, $engelure, 
        $commotion_cerebrale, $corps_etranger, $coupure, $laceration, $dechirure, 
        $douleur_dos, $egratignure, $eraflure, $piqure, $echarde, 
        $entorse, $elongation, $contusion, $foulure, $luxation, 
        $fracture, $amputation, $irritation, $infection, $inhalation, 
        $violence_physique, $violence_verbale, $description, $premiers_soins, $nom_secouriste, 
        $accident_sans_absence, $accident_avec_consultation_medical, $matricule_usager,
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
