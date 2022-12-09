<?php

namespace App\Imports;

use App\Models\Etudiant;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class EtudiantImport implements ToModel, WithProgressBar, WithHeadingRow
{
    use Importable;
    public function model(array $row)
    {
        return new Etudiant([
           'nom'     => $row['nom'],
           'postnom'    => $row['postnom'],
        ]);
    }
    public function headingRow(): int
    {
        return 7;
    }
}
