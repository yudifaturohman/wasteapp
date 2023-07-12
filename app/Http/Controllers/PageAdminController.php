<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrashLocation;
use App\Models\Report;

class PageAdminController extends Controller
{
    public function dashboard()
    {
        $countLocation = TrashLocation::count();
        $countReport = Report::where('status', 'open')->count();
        $arrayCount = array(
            'countLocation' => $countLocation,
            'countReport' => $countReport
        );

        $initialMarkers = [
            [
                'position' => [
                    'lat' => -6.01242780129032,
                    'lng' => 106.03436873617736
                ],
                'draggable' => true
            ]
        ];

        return view('admin.dashboard', compact('initialMarkers'))
        ->with($arrayCount);
    }

    public function trash_location()
    {
        return view('admin.trash-location');
    }

    public function report_full_trash()
    {
        return view('admin.report');
    }
}
