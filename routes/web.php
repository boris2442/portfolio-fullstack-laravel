<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::get('/dashboard', [DashboardController::class, 'dashboardIndex'])->name('home-dashboard-page');