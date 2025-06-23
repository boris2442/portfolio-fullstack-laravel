<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;


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
    Route::delete('/admin/skill/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');
    Route::get('/admin/skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('/admin/skill/create', [SkillController::class, 'store'])->name('skill.store');
    // Route::get('/admin/skill/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    // Route::patch('/admin/skill/edit/{id}', [SkillController::class, 'update'])->name('skill.update');
    

    // Routes destinees a l'education
    Route::get('/admin/education', [EducationController::class, 'index'])->name('education.index');
    Route::delete('/admin/education/{id}', [EducationController::class, 'destroy'])->name('education.destroy');

    Route::get('/admin/education/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/admin/education/create', [EducationController::class, 'store'])->name('education.store');


    //Route destinees a testimonial dashboard
    Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    //Route::get('/admin/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    // Route::post('/admin/testimonial/create', [TestimonialController::class, 'store'])->name('testimonial.store');
    // Route::delete('/admin/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    //Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');

    //Route destinnees aux project
    Route::get('/admin/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/admin/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/admin/project/create', [ProjectController::class, 'store'])->name('project.store');
    Route::delete('/admin/project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/admin/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::patch('/admin/project/edit/{id}', [ProjectController::class, 'update'])->name('project.update');

    //Route destines aux experience
    Route::get('/admin/experience', [ExperienceController::class, 'index'])->name('experience.index');
    Route::get('/admin/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/admin/experience/create', [ExperienceController::class, 'store'])->name('experience.store');
Route::delete('/admin/experience/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');
    Route::get('/admin/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::patch('/admin/experience/edit/{id}', [ExperienceController::class, 'update'])->name('experience.update');
    //Route destines aux project
    Route::get('/admin/project', [ExperienceController::class, 'index'])->name('project.index');
    Route::get('/admin/project/create', [ExperienceController::class, 'create'])->name('project.create');
    Route::post('/admin/project/create', [ExperienceController::class, 'store'])->name('project.store');

    Route::delete('/admin/project/{id}', [ExperienceController::class, 'destroy'])->name('project.destroy');
    Route::get('/admin/project/edit/{id}', [ExperienceController::class, 'edit'])->name('project.edit');
    Route::patch('/admin/project/edit/{id}', [ExperienceController::class, 'update'])->name('project.update');


    //Route destines aux message

    Route::get('/admin/message', [MessageController::class, 'index'])->name('message.index');
    Route::get('/admin/message/create', [MessageController::class, 'create'])->name('message.create');
    Route::post('/admin/message/create', [MessageController::class, 'store'])->name('message.store');
    Route::delete('/admin/message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');
    Route::get('/admin/message/edit/{id}', [MessageController::class, 'edit'])->name('message.edit');
    Route::patch('/admin/message/edit/{id}', [MessageController::class, 'update'])->name('message.update');
    //Route destines aux user

    Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/admin/message/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/admin/user/create', [UserController::class, 'store'])->name('user.store');
    Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/admin/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
    //Route destines aux settings

    Route::get('/admin/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::get('/admin/setting/create', [SettingController::class, 'create'])->name('setting.create');
    Route::post('/admin/setting/create', [SettingController::class, 'store'])->name('setting.store');
    Route::delete('/admin/setting/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');
    Route::get('/admin/setting/edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');
    Route::patch('/admin/setting/edit/{id}', [SettingController::class, 'update'])->name('setting.update');
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
