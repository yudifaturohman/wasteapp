<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes Administrator
|-------------------------------------------------------------------------
|
*/
Route::get('/dashboard', [PageAdminController::class, 'dashboard'])->name('dashboard');
Route::get('/trash-location', [PageAdminController::class, 'trash_location'])->name('location');
Route::get('/report-trash-location', [PageAdminController::class, 'report_full_trash'])->name('report');

Route::get('/', function () {
    return view('welcome');
});
