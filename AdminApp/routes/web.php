<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SSLCommerzCredentialController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return inertia('Dashboard');
//});


Route::get('/',[DashboardController::class,'index'])->name('page.dashboard');
Route::resource('/settings',SSLCommerzCredentialController::class);