<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, "home"])->name("home");
Route::get('/doctor', [ClientController::class, "doctor"])->name("doctor");
Route::get('/majors', [ClientController::class, "majors"])->name("majors");
Route::get('doctor/bookappoument/{doctor_id?}', [ClientController::class, "BookAppoument"])->name("bookappoument");

Route::prefix("/auth")->name("auth.")->group(function () {
    Route::get('/login',[AuthController::class,"login"])->name("login");
    Route::get('/register', [AuthController::class, "register"])->name("register");
    Route::get('/contact', [AuthController::class, "contact"])->name("contact");
});
