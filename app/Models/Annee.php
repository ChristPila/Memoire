<?php

namespace App\Models;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];
    
    public function promo(){
        return $this->belongsToMany(Promotion::class, "annee_promos", "annees_id", "promotions_id");
    }
}
