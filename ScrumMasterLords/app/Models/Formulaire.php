<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Blessure;
use App\Models\Usager;

class Formulaire extends Model
{
    use HasFactory;

    protected $fillable = ['question1', 'question2','question3','question4','question5','question6','question7','question8','question9','question10','question11','question12',
    'question13','question14','question15','question16','question17','question18','question19','question20','question21','question22','question23','question24','question25'];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
    
    public function blessures(): HasMany
    {
        return $this->hasMany(Blessure::class);
    }

    public function usagers()
    {
        return $this->belongsToMany(Usager::class, 'formulaire_usager', 'formulaire_id', 'usager_id');
    }

}