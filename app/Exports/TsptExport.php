<?php

namespace App\Exports;

use App\Models\Ex_Tspt;
use Maatwebsite\Excel\Concerns\FromCollection;

class TsptExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ex_Tspt::all();
    }
}
