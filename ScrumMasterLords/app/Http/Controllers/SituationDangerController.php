<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SituationDangereuseRequest;
use Illuminate\View\View;
use App\Models\Formulaire_signalement_situation_dangereuses;
use Illuminate\Support\Facades\Log;
use DB;

class SituationDangerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('formulaires.formDanger');
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
    public function store(SituationDangereuseRequest $request)
    {
        //Log::debug('avant procédure');
        try {
                //Log::debug('début procédure');
                $username = $request->get('prenom') . $request->get('nom');
                //Log::debug($username);
                //$username += $request->get('nom');
                //Log::debug($username);
            
                $situationDangereuse = new Formulaire_signalement_situation_dangereuses($request->all());
                $situationDangereuse->save();
                //Log::debug('fin procédure');
            }
            catch (\Throwable $e) {
                Log::debug($e);
                
            }
            return redirect()->route('formulaires.danger', $username);
        
        
        
        // $nom = $request->get('nom');
        // $prenom = $request->get('prenom');
        // $matricule = $request->get('matricule');
        // $fonction = $request->get('fonction'); 
        // $secteur = $request->get('secteur');//5
        // $date = $request->get('datetime-local');
        // $lieu = $request->get('lieu');
        // $temois = $request->get('dTemoin');
        // $description = $request->get('dEvent');
        // $correction = $request->get('dCorrection');//10
        // DB::insert('insert into formulaire_signalement_situation_dangereuses (
        //     nom, prenom, matricule, fonction, secteur,
        //     date, lieu, temois, description, correction
        //     ) values 
        //      (?, ?, ?, ?, ?,
        //      ?, ?, ?, ?, ?)',
        //     [$nom, $prenom, $matricule, $fonction, $secteur,
        //     $date, $lieu, $temois, $description, $correction]);
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
