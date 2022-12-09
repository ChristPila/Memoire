<?php

namespace App\Models;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'postnom',
    ];
    
    public function promotion(){
        return $this->belongsTo(Promotion::class, "promotions_id", "id");
    }

    public function annePromo(){
        return $this->belongsToMany(AnneePromo::class, "annee_promo_etudiants", "etudiants_id", "annee_promos_id");
    }
}
