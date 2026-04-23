<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;

Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/signup", [SignupController::class,"create"])->name("signup");
Route::get("/signin", [SigninController::class,"create"])->name("signin");
Route::get("/show", [CarController::class,"show"])->name("show");
Route::get("/create", [CarController::class,"create"])->name("create");
Route::get("/cars", [CarController::class,"cars"])->name("cars") ;
Route::get("/search", [CarController::class,"search"])->name("search") ;




