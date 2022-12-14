<?php

namespace App\Imports;

use App\Models\Cours;
use App\Models\CoursPromotion;
use App\Models\Etudiant;
use App\Models\Evaluation;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use PhpParser\Node\Expr\AssignOp\Mod;
use PhpParser\Node\Expr\Cast\Double;

class EvaluationImport implements ToCollection, WithProgressBar, WithHeadingRow
{
  /**
   * @param Collection $collection
   */
  use Importable;
  public function collection(Collection $row)
  {
    // dd(count($row));
    $i = 6;
    $rt = 3;
    $r = $rt;
    //dd($row[6]);
   //block course
   while($r < 34){
    if($r == 6){
      Cours::create([
        'nom'    => $row[0][6],
        'ponderation'    => $row[5][6],
        "annee_promos_id" =>null
      ]);    
     }
     else{
      Cours::create([
        'nom'    => $row[0][$r],
        'ponderation'    => $row[5][$r+2],
        "annee_promos_id" =>null
      ]);
      $r +=2;
     }
     $r++;
   }
   //endblock

  
  $cours = new Cours();

      while( $i < count($row)){
      Etudiant::create([
        'nom'     => $row[$i][1],
        'postnom'    => $row[$i][2],
     ]);
      while($rt < 34){
       
      if($rt == 6){
      
       $state = new Etudiant();
       $student =  $state->where("nom",$row[$i][1])->where("postnom",$row[$i][2])->first(); 
       $coursDy =  $cours->where("nom",$row[0][6])->first();     
        Evaluation::create([
          'annee_promo_etudiants_id'=>$student->id,
          'cours_id'  =>$coursDy->id,
          'point_annee'    => 0,
          'point_examen'    => $row[$i][6],
          'point_totale'    => $row[$i][6]
        ]);
      }
      else{
         $coursDy =  $cours->where("nom",$row[0][$rt])->first();     
         $tot=(double)str_replace(",",".",$row[$i][$rt+2]??0);
         $ex=(double)str_replace(",",".",$row[$i][$rt+1]??0);
         $ax=(double)str_replace(",",".",$row[$i][$rt]??0);
         $state = new Etudiant();
       $student =  $state->where("nom",$row[$i][1])->where("postnom",$row[$i][2])->first(); 
         Evaluation::create([
          'annee_promo_etudiants_id'=>$student->id,
          'cours_id'  =>$coursDy->id,
          'point_annee'    => $ax,
          'point_examen'    => $ex,
          'point_totale'    => (double) $tot
        ]);
        $rt +=2;
      }
      $rt++;
    }
      $rt =3;
      $i++;
    }

      }


}
