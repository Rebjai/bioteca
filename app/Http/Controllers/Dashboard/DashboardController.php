<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Collection\Amphibian;
use App\Models\Collection\Bird;
use App\Models\Collection\Mammal;
use App\Models\Collection\Reptile;
use App\Models\Collection\Specimen;
use DateTime;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Get the dashboard view
     */
    public function index()
    {
        $title = 'Dashboard';
        $latest = Specimen::with('modifiedBy')->select(['created_at', 'updated_at', 'collection_date', 'id', 'measurable_type', 'measurable_id', 'modified_by_id'])->latest('updated_at')->limit(5)->get();
        $count = Specimen::count();
        $mammal_count = Mammal::count();
        $amphibian_count = Amphibian::count();
        $bird_count = Bird::count();
        $reptile_count = Reptile::count();
        // dd($latest);
        $latest->append('collection_name');
        $datasets = $this->getCountByMonth();
        $labels = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
        // dd(compact('datasets'));
        // $chartData['labels']= ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
        return Inertia::render(
            'Dashboard',
            compact(
                'title',
                'latest',
                'datasets',
                'labels',
                'count',
                'mammal_count',
                'amphibian_count',
                'bird_count',
                'reptile_count',
            )
        );
    }

    /**
     * Get records of each month
     */
    public function getCountByMonth()
    {
        $firstDayOfYear = new DateTime('first day of January ' . date('Y'));
        $today = new DateTime();
        $result = Specimen::where('collection_date', '>=', $firstDayOfYear)
            ->where('collection_date', '<=', $today)->get()->groupBy(
                function ($spec) {
                    $datetime = DateTime::createFromFormat('d/m/Y', $spec->collection_date);
                    return $datetime->format('m');
                }
            );
        $usermcount = [];
        $monthlyData = [];

        foreach ($result as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        $month = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $monthlyData[$month[$i - 1]] = $usermcount[$i];
            } else {
                $monthlyData[$month[$i - 1]] = 0;
            }
        }
        return $monthlyData;
    }
}
