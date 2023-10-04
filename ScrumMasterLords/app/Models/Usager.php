<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Usager as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Usager extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getAuthPassword()
    {
        return $this->mdp;
    }

    public function departement() {
        return $this->hasOne(Departement::class);
    }

    public $timestamps = false;
}
