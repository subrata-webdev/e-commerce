<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SSLCommerzCredentialController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return inertia('Dashboard');
//});

Route::redirect('/','/dashboard');
Route::get('/dashboard',[DashboardController::class,'index'])->name('page.dashboard');
Route::resource('/settings',SSLCommerzCredentialController::class);
Route::resource('/brands',BrandController::class);
Route::get('/login', [AuthController::class,'loginPage'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.post');