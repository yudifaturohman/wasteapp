<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes User
|-------------------------------------------------------------------------
|
*/
Route::get('/', [PageAdminController::class, 'index'])->name('index');

/*
|--------------------------------------------------------------------------
| Web Routes Administrator
|-------------------------------------------------------------------------
|
*/

Route::get('/login', [PageAdminController::class, 'login'])->name('login');
Route::post('/login', [PageAdminController::class, 'postLogin']);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [PageAdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/trash-location', [PageAdminController::class, 'trash_location'])->name('location');
    Route::get('/report-trash-location', [PageAdminController::class, 'report_full_trash'])->name('report');
    Route::get('/logout', [PageAdminController::class, 'postLogout'])->name('logout');
});