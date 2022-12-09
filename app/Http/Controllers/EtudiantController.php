<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Imports\EtudiantImport;
use App\Imports\EvaluationImport;
use App\Models\AnneePromo;
use App\Models\AnneePromoEtudiant;
use App\Models\Cours;
use Maatwebsite\Excel\Facades\Excel;

class EtudiantController extends Controller
{
    //
    public function reception(Request $request){
        Excel::import(new EtudiantImport, $request->file('file'));
        Excel::import(new EvaluationImport, $request->file('file'));
        $state = Etudiant::where('promotions_id', null)->get();
        $u = $request->yearac;
        AnneePromo::create([
            'annees_id' => $u,
            'promotions_id'=> $request->input('promotions_id'),
          ]);
        foreach ( $state  as $key) {
           $key->promotions_id = $request->promotions_id;
           $key->update();
        }
        $user = Etudiant::all();
        $dynamique = AnneePromo::where("promotions_id",$request->input('promotions_id'))->first();
        foreach($user  as $del){
            AnneePromoEtudiant::create([
                "annee_promos_id"=> $dynamique->id,
                'etudiants_id' =>$del->id,
              ]);
        }
        $stat = Cours::where('promotions_id', null)->get();
        foreach ( $stat  as $key) {
    
            $key->promotions_id = $request->promotions_id;
            $key->update();
         }
        return back();
    }
}
