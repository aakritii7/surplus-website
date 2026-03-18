<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [FrontendController::class, "home"]);
Route::get('/about', [FrontendController::class, "about"]);

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
Route::post('/admin/team/store',[TeamController::class,'create'])->name('admin.team.store');
Route::get('/admin/team/edit/{id}',[TeamController::class,'create'])->name('admin.team.edit');
Route::post('/admin/team/update',[TeamController::class,'create'])->name('admin.team.update');
Route::get('/admin/team/view',[TeamController::class,'create'])->name('admin.team.view');
Route::delete('/admin/team/delete/{id}',[TeamController::class,'create'])->name('admin.team.delete');



Route::get('/admin/service',[ServiceController::class,"index"])->name('admin.service');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
