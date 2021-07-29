<?php

namespace App\Imports;

use App\Models\AddgroupModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class AddgroupModelExport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new AddgroupModel([
            'gname'=>$row['gname'],
            'url'=>$row['url'],
            'gimg'=>$row['gimg'],
            'type'=>$row['type'],
            'gctype'=>$row['gctype'],
            'gmail'=>$row['gmail'],
        ]);
    }
}
