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

Route::get('/', function () {
    return view('welcome');
});
