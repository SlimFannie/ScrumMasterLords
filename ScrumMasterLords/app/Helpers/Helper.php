<?php

namespace App\Helpers;

use App\Models\Usager;
use App\Models\Departement;
use Session;

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
        
    }