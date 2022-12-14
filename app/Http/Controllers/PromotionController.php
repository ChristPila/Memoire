<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function show($id){      
        $value = Etudiant::where("promotions_id",$id)->get();
        $val = Annee::all();
        return view('promotion.Lpta')->with("liste", $value)->with("id",$id)->with("ac",$val);
    }

   






}
