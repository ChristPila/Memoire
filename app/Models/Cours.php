<?php

namespace App\Models;

use App\Models\CoursPromotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{

    use HasFactory;

    protected $fillable = [
        'nom',
        'ponderation',
        "annee_promos_id"
    ];
}
