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

        $locations = TrashLocation::all();

        $getJsonLocations = $locations->map( function($locations){
            return [
                'position' => [
                    'lat' => (float)$locations->lat,
                    'lng' => (float)$locations->long,
                    'location_name' => $locations->location_name
                ],
            ];
        });

        return view('admin.dashboard', compact('getJsonLocations'))
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
