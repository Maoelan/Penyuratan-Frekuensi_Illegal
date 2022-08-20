<?php

namespace App\Exports;

use App\Models\M_tmisr;
use Maatwebsite\Excel\Concerns\FromCollection;

class TmisrExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return M_tmisr::all();
    }
}
