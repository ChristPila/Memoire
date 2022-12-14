<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Etudiant;
use App\Models\AnneePromo;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Models\AnneePromoEtudiant;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('home');
    }

    public function dashboard(){
        return view('welcome');
    }
    public function show(){
        return view('promotion.Lpta');
    }
    public function showCredit($id){    
        
        //dd("oui");
       // $value = Etudiant::where("promotions_id",$id)->get();
        //$val = Annee::all();
        $rep = [];
        $deci ="";
        AnneePromo::findOrFail($id)->get();
        $status = AnneePromoEtudiant::where("annee_promos_id",$id)->get();
        $very = new Etudiant();
        $evaluation = new Evaluation();
        foreach ($status as $value) {
        
             
             $testing= $evaluation->where("annee_promo_etudiants_id",$value->id)->get(); 
            $io = $testing;
            foreach ($io as $testing) {
                # code...
               
                $i = Cours::where("annee_promos_id",$id)->where("id",$testing->cours_id)->first();
                //$tab = 
                if( ($testing->point_annee + $testing->point_examen) < ($i->ponderation/2)){
                   $a = $i->nom;
                  // $u =  $u == 
                   $deci .="$a\nPA $testing->point_annee, PE :$testing->point_examen\n"; 

                }
            
            }
            $rep []=["id"=>$value->id,"validation"=>$deci];
         //   dd($rep);
            $deci ="";
        }
       // dd($rep);
        return view('promotion.LptaExport')->with("stdUser",$status)->with("student",$very)->with("stock",$rep);

    }
}
