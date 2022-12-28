<?php

namespace App\Exports;

use App\Models\Collection\Specimen;
use App\Models\Collection\Specimens;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Excel;

class SpecimenExport implements FromCollection, Responsable
{
    use Exportable;
    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'specimenes.xlsx';

     /**
    * Optional Writer Type
    */
    private $writerType = Excel::XLSX;
    public function __construct(Builder $specimens) {
        $this->specimens = $specimens;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->specimens->get();
    }
}
