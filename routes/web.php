<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;



Route::get('/', [HomeController::class, 'index'])->name('home-page');
// Route::get('/', [HomeController::class, 'affichService'])->name('home-service');
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');


    ///Routes crud destinees aux about 
    Route::get('/admin/about', [AboutController::class, 'edit'])->name('edit-about');
    Route::patch('/admin/about', [AboutController::class, 'update'])->name('update-about');
    Route::get('/admin/medias', [MediaController::class, 'index'])->name('index-medias');
    Route::post('/admin/medias', [MediaController::class, 'store'])->name('store-medias');
    Route::delete('/admin/medias/{id}', [MediaController::class, 'destroy'])->name('destroy.medias');

    // Routes destinees aux services
    Route::delete('/admin/service/{id}', [ServiceController::class, 'destroy'])->name('destroy.service');
    Route::get('/admin/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/admin/service/create', [ServiceController::class, 'store'])->name('service.store');

    //////////////////////////End services
    Route::get('/admin/skill', [SkillController::class, 'index'])->name('skill.index');

    // Routes destinees a l'education
    Route::get('/admin/education', [EducationController::class, 'index'])->name('education.index');
    Route::delete('/admin/education/{id}', [EducationController::class, 'destroy'])->name('education.destroy');

    Route::get('/admin/education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/admin/education/create', [EducationController::class, 'store'])->name('education.store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








require __DIR__ . '/auth.php';
Route::get('/{any}', function () {
    return view('pageNotFound');
})->where('any', '.*');
