<?php

namespace App\Helpers;

use App\Models\Usager;
use App\Models\Departement;
use App\Models\Formulaire;
use DB;
use Session;
use Request;

    class Helper

    {

        public static function getNotif() {
            $usager = Usager::find(Session::get('user.id'));
            $notifications = $usager->formulaires()->where('lu', false)->get();

            return $notifications;
        } 

        public static function getDepartement() {
            $departements = Departement::all();

            return $departements;
        }

        public static function getTitre(int $id) {
            $formuser = DB::table('formulaire_usager')->where('id', '=', $id)->value('formulaire_id');
            $formulaire = DB::table('formulaires')->where('id', '=', $formuser)->value('titre');

            return $formulaire;
        }
        
    }