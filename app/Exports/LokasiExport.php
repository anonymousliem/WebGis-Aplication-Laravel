<?php

namespace App\Exports;

use App\DataMaps;
use Maatwebsite\Excel\Concerns\FromCollection;

class LokasiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataMaps::all();
    }
}
