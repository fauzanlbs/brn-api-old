<?php

namespace App\Http\Controllers;

use TobiasDierich\Gauge\Contracts\EntriesRepository;
use TobiasDierich\Gauge\Storage\FamilyQueryOptions;

class PerformanceMonitoringController extends Controller
{
    public function index(EntriesRepository $storage)
    {
        $options = (new FamilyQueryOptions())
            ->orderBy('duration_total')
            ->limit(5);

        return view('monitoring.dashboard', [
            'requests' => $storage->getFamilies('request', $options),
            'queries'  => $storage->getFamilies('query', $options),
        ]);
    }
}
