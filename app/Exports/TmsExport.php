<?php

namespace App\Exports;

use App\Models\Ex_Tms;
use Maatwebsite\Excel\Concerns\FromCollection;

class TmsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ex_Tms::all();
    }
}
