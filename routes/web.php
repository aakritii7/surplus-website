<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontendController::class, "home"]);
Route::get('/about', [FrontendController::class, "about"]);

Route::get('/admin/dashboard', [AdminController::class, "dashboard"])->name('admin.dashboard');
Route::get('/admin/course', [CourseController::class, "index"])->name('admin.course');
Route::get('/admin/course/create', [CourseController::class, "create"])->name('admin.course.create');
Route::post('/admin/course/store', [CourseController::class, "store"])->name('admin.course.store');
Route::get('/admin/course/edit', [CourseController::class, "edit"])->name('admin.course.edit');
Route::get('/admin/course/view', [CourseController::class, "view"])->name('admin.course.view');

Route::get('/admin/category', [CategoryController::class, "index"])->name('admin.category');
Route::get('/admin/category/create', [CategoryController::class, "create"])->name('admin.category.create');
Route::post('/admin/category/store', [CategoryController::class, "store"])->name('admin.category.store');
Route::get('/admin/category/edit/{id}', [CategoryController::class, "edit"])->name('admin.category.edit');
Route::post('/admin/category/update', [CategoryController::class, "update"])->name('admin.category.update');
Route::get('/admin/category/view', [CategoryController::class, "view"])->name('admin.category.view');
Route::delete('/admin/category/delete/{id}',[CategoryController::class,"delete"])->name('admin.category.delete');

Route::get('/admin/registration',[RegistrationController::class,"index"])->name('admin.registration');

Route::get('/admin/team',[TeamController::class,"index"])->name('admin.team');
Route::get('/admin/service',[ServiceController::class,"index"])->name('admin.service');