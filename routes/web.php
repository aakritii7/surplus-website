<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [FrontendController::class, "home"]);
Route::get('/about', [FrontendController::class, "about"]);


Route::middleware('auth')->group(function () {
    
    Route::get('/admin/dashboard', [AdminController::class, "dashboard"])->name('admin.dashboard');
    Route::get('/admin/course', [CourseController::class, "index"])->name('admin.course');
    Route::get('/admin/course/create', [CourseController::class, "create"])->name('admin.course.create');
    Route::post('/admin/course/store', [CourseController::class, "store"])->name('admin.course.store');
    Route::get('/admin/course/edit/{id}', [CourseController::class, "edit"])->name('admin.course.edit');
    Route::post('/admin/course/update', [CourseController::class, "update"])->name('admin.course.update');
    Route::get('/admin/course/view', [CourseController::class, "view"])->name('admin.course.view');
    Route::delete('/admin/course/delete/{id}', [CourseController::class,"delete"])->name('admin.course.delete');
    
    Route::get('/admin/category', [CategoryController::class, "index"])->name('admin.category');
    Route::get('/admin/category/create', [CategoryController::class, "create"])->name('admin.category.create');
    Route::post('/admin/category/store', [CategoryController::class, "store"])->name('admin.category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, "edit"])->name('admin.category.edit');
    Route::post('/admin/category/update', [CategoryController::class, "update"])->name('admin.category.update');
    Route::get('/admin/category/view', [CategoryController::class, "view"])->name('admin.category.view');
    Route::delete('/admin/category/delete/{id}',[CategoryController::class,"delete"])->name('admin.category.delete');
    
    Route::get('/admin/registration',[RegistrationController::class,"index"])->name('admin.registration');
    
    Route::get('/admin/team',[TeamController::class,"index"])->name('admin.team');
    Route::get('/admin/team/create',[TeamController::class,'create'])->name('admin.team.create');
    Route::post('/admin/team/store',[TeamController::class,'store'])->name('admin.team.store');
    Route::get('/admin/team/edit/{id}',[TeamController::class,'edit'])->name('admin.team.edit');
    Route::post('/admin/team/update',[TeamController::class,'update'])->name('admin.team.update');
    Route::get('/admin/team/view',[TeamController::class,'view'])->name('admin.team.view');
    Route::delete('/admin/team/delete/{id}',[TeamController::class,'delete'])->name('admin.team.delete');
    
    
    
    Route::get('/admin/service',[ServiceController::class,"index"])->name('admin.service');
    Route::get('/admin/service/create',[ServiceController::class,'create'])->name('admin.service.create');
    Route::post('/admin/service/store',[ServiceController::class,'store'])->name('admin.service.store');
    Route::get('/admin/service/edit/{id}',[ServiceController::class,'edit'])->name('admin.service.edit');
    Route::post('/admin/service/update',[ServiceController::class,'update'])->name('admin.service.update');
    Route::get('/admin/service/view',[ServiceController::class,'view'])->name('admin.service.view');
    Route::delete('/admin/service/delete/{id}',[ServiceController::class,'delete'])->name('admin.service.delete');
    
    
    Route::get('admin/testimonial',[TestimonialController::class,"index"])->name('admin.testimonial');
    Route::get('admin/testimonial/create',[TestimonialController::class,"create"])->name('admin.testimonial.create');
    Route::post('admin/testimonial/update',[TestimonialController::class,"update"])->name('admin.testimonial.update');
    Route::get('admin/testimonial/edit/{id}',[TestimonialController::class,"edit"])->name('admin.testimonial.edit');
    Route::post('admin/testimonial/store',[TestimonialController::class,"store"])->name('admin.testimonial.store');
    Route::get('admin/testimonial/view',[TestimonialController::class,"view"])->name('admin.testimonial.view');
    Route::delete('admin/testimonial/delete/{id}',[TestimonialController::class,"delete"])->name('admin.testimonial.delete');
    
    
    Route::get('admin/setting',[SettingController::class,"index"])->name('admin.setting');
    Route::get('admin/setting/create',[SettingController::class,'create'])->name('admin.setting.create');
    Route::post('admin/setting/store',[SettingController::class,'store'])->name('admin.setting.store');
    Route::get('admin/setting/edit/{id}',[SettingController::class,'edit'])->name('admin.setting.edit');
    Route::post('admin/setting/update',[SettingController::class,'update'])->name('admin.setting.update');
    Route::get('admin/setting/view',[SettingController::class,'view'])->name('admin.setting.view');
    Route::delete('admin/setting/delete/{id}',[SettingController::class,'delete'])->name('admin.setting.delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
