<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Specimen\Specimen;
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
        $latest = Specimen::select(['created_at', 'updated_at', 'collection_date', 'id', 'measurable_type'])->latest()->limit(10)->get();
        $count = Specimen::count();
        // dd($latest);
        $latest->append('collection_name');
        $datasets = $this->getCountByMonth();
        $labels = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
        // dd(compact('datasets'));
        // $chartData['labels']= ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
        return Inertia::render('Dashboard', compact('title', 'latest', 'datasets', 'labels', 'count'));
    }

    /**
     * Get records of each month
     */
    public function getCountByMonth()
    {
        # code...
        $firstDayOfYear = new DateTime('first day of January ' . date('Y'));
        $today = new DateTime();
        $result = Specimen::where('created_at', '>', $firstDayOfYear)
            ->where('created_at', '<', $today)->get()->groupBy(
                function ($spec) {
                    $datetime = new DateTime($spec->created_at);
                    // $datetime->format('m');
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
                $monthlyData[$month[$i-1]] = $usermcount[$i];
            } else {
                $monthlyData[$month[$i-1]] = 0;
            }
            // $monthlyData[$i] = $month[$i - 1];
        }
        // $res = ['data' => $monthlyData];
        // dd($month);
        // dd(array_values($month));
        return $monthlyData;
    }
}
