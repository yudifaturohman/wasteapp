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

Route::get('/', function () {
    return view('welcome');
});
