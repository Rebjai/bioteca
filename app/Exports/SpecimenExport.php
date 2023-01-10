<?php

namespace App\Exports;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Excel;

class SpecimenExport implements
    FromCollection,
    Responsable,
    WithHeadings,
    WithMapping,
    ShouldAutoSize
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
    public function __construct(Builder $specimens)
    {
        $this->specimens = $specimens;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->specimens->get();
    }

    public function headings(): array
    {

        $specimens = $this->specimens->with('measurable')->get();
        $columnNames = array_keys($specimens->first()->getAttributes());
        return $columnNames;
    }

    public function map($specimen): array
    {
        $baseData=[
            $specimen->id,
            $specimen->collection_date,
            $specimen->creator->fullname,
            $specimen->species->scientific_name,
            $specimen->location->name,
            $specimen->locality,
            $specimen->latitude,
            $specimen->longitude,
            $specimen->altitude,
            $specimen->collector_number,
            $specimen->assistant_number,
            $specimen->measurable->id,
            $specimen->collection_name,
            $specimen->created_at,
            $specimen->updated_at,
            $specimen->collector->fullname,
            $specimen->assistant->fullname,
        ];
        $measurable_data = $specimen->measurable->toArray();

        return array_merge($baseData, $measurable_data);
    }
}
