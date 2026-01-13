<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontendController::class, "home"]);
Route::get('/about', [FrontendController::class, "about"]);

Route::get('/admin/dashboard', [AdminController::class, "dashboard"]);

