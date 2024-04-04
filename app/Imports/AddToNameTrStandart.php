<?php

namespace App\Imports;

use App\Models\Standart;
use Maatwebsite\Excel\Concerns\ToModel;

class AddToNameTrStandart implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $standart = Standart::findOrFail($row[0]);
        
        $standart->name_tr = $row[2];
        
        $standart->save();

        return redirect()->back();
    }
}