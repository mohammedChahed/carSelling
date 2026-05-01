<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;

Route::get("/", [HomeController::class,"index"])->name("home");
Route::get("/home", [HomeController::class,"index"])->name("home");
Route::get("/signup", [SignupController::class,"create"])->name("signup");
Route::post("/signup", [SignupController::class,"store"])->name("signup.store");
Route::get("/signin", [SigninController::class,"create"])->name("signin");
Route::post("/signin", [SigninController::class,"store"])->name("signin.store");
Route::get("/carDetail/{id}", [CarController::class,"carDetail"])->name("carDetail.show");
Route::post("/create", [CarController::class,"create"])->name("create");
Route::get("/cars", [CarController::class,"cars"])->name("cars") ;
Route::get("/search", [CarController::class,"search"])->name("search") ;

Route::delete('/logout',[LogoutController::class,"destroy"]);




