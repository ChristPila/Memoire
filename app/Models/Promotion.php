<?php

namespace App\Models;

use App\Models\Cours;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Annee;

class Promotion extends Model
{
    use HasFactory;
    public function etudiant(){
        return $this->hasMany(Etudiant::class);
    }

    public function annee(){
        return $this->belongsToMany(Annee::class, "annee_promos", "promotions_id", "annees_id");
    }
}
