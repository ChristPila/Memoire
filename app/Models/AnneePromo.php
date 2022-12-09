<?php

namespace App\Models;

use App\Models\Annee;
use App\Models\Etudiant;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnneePromo extends Model
{
    use HasFactory;

    protected $fillable = [
        'annees_id',
        'promotions_id',
    ];


    public function annee(){
        return $this->belongsTo(Annee::class);
    }

    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }

    public function etudiant(){
        return $this->belongsToMany(Etudiant::class, "annee_promo_etudiants", "annee_promos_id", "etudiants_id");
    }
}
