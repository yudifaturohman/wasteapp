<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageAdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function trash_location()
    {
        return view('admin.trash-location');
    }
}
