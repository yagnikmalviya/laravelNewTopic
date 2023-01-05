<?php

namespace App\Imports;

use App\Models\XlsxTable;
use Maatwebsite\Excel\Concerns\ToModel;

class XlsxImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new XlsxTable([
            'name'     => $row[1],
            'email'    => $row[2],
            'mobile'    => $row[3],
            'city'    => $row[4],
            'district'    => $row[5],
            'taluka'    => $row[6],
            'address'    => $row[7],
            // 'name'     => $row['name'],
            // 'email'    => $row['email'],
            // 'mobile'    => $row['mobile'],
            // 'city'    => $row['city'],
            // 'district'    => $row['district'],
            // 'taluka'    => $row['taluka'],
            // 'address'    => $row['address'],
        ]);
    }
}
