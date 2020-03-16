<?php

namespace App\Exports;

use App\Wisatawan;
use Maatwebsite\Excel\Concerns\FromCollection;

class WisatawanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Wisatawan::all();
    }
}
