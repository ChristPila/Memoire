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
    $state = new Etudiant();
    $cours = new Cours();
    // dd(count($row));
    $i = 6;
    $rt = 3;
    //dd($row[6]);
    while( $i < count($row)){
      while($rt < 34){
   
      if($rt == 6){
        Evaluation::create([
          'point_annee'    => 0,
          'point_examen'    => $row[$i][6],
          'point_totale'    => $row[$i][6]
        ]);
      }
      else{
         $tot=(double)str_replace(",",".",$row[$i][$rt+2]??0);
         $ex=(double)str_replace(",",".",$row[$i][$rt+1]??0);
         $ax=(double)str_replace(",",".",$row[$i][$rt]??0);
        Evaluation::create([
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








    Cours::create([
      'nom'    => $row[0][3],
      'ponderation'    => $row[5][5],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][6],
      'ponderation'    => $row[5][6],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][7],
      'ponderation'    => $row[5][9],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][10],
      'ponderation'    => $row[5][12],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][13],
      'ponderation'    => $row[5][15],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][16],
      'ponderation'    => $row[5][18],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][19],
      'ponderation'    => $row[5][21],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][22],
      'ponderation'    => $row[5][24],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][25],
      'ponderation'    => $row[5][27],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][28],
      'ponderation'    => $row[5][30],
      'promotions_id' =>null
    ]);
    Cours::create([
      'nom'    => $row[0][31],
      'ponderation'    => $row[5][33],
      'promotions_id' =>null
    ]);
  }


}
