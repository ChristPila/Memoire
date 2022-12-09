<?php

namespace App\Models;

use App\Models\AnneePromoEtudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
        'point_annee',
        'point_examen',
        'point_totale',
    ];
    public function anneePromoEtudiant(){
        return $this->belongsTo(AnneePromoEtudiant::class, "annee_promo_etudiant_id", "id");
    }
}
