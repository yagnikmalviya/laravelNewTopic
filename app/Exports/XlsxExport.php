<?php

namespace App\Exports;

use App\Models\XlsxTable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class XlsxExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return XlsxTable::all();
        // return XlsxTable::select("id", "name", "email", "mobile", "city", "district", "taluka", "address")->get();
    }

    // public function headings(): array
    // {
    //     return ["ID", "Name", "Email", "Mobile", "City", "District", "Taluka", "Address"];
    // }
}
