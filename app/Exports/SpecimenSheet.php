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
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Excel;

class SpecimenSheet implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithTitle
{
    protected $specimens;
    protected $type;

    public function __construct($specimens, $type)
    {
        $this->specimens = $specimens;
        $this->type = $type;
    }

    public function collection()
    {
        return $this->specimens;
    }

    public function headings(): array
    {

        $firstSpecimen = $this->specimens->first();
        if ($firstSpecimen) {
            $columnNames = array_keys($firstSpecimen->getAttributes());
        } else {
            $columnNames = [];
        }

        return $columnNames;
    }

    public function map($specimen): array
    {
        $baseData = [
            $specimen->id,
            $specimen->collection_date,
            $specimen->creator->fullname,
            $specimen->modifiedBy?->fullname,
            $specimen->species->scientific_name,
            $specimen->location->fullname,
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

    public function title(): string
    {
        return $this->type;
    }
}
