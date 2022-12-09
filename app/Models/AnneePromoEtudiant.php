<?php

namespace App\Models;

use App\Models\Etudiant;
use App\Models\AnneePromo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Evaluation;

class AnneePromoEtudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'annee_promos_id',
        'etudiants_id',
    ];
    public function annePromo(){
        return $this->belongsTo(AnneePromo::class);
    }

    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }

    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
}
