<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
Route::get('/admin/about', [AboutController::class, 'edit'])->name('edit-about');

Route::patch('/admin/about', [AboutController::class, 'update'])->name('update-about');
Route::get('/admin/medias', [MediaController::class, 'index'])->name('index-medias');
Route::post('/admin/medias', [MediaController::class, 'store'])->name('store-medias') ;
Route::delete('/admin/medias/{id}', [MediaController::class, 'destroy'])->name('destroy.medias');
Route::get('/{any}', function(){
    return view('pageNotFound');
})->where('any', '.*');