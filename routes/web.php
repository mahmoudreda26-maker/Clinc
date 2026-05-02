<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\appointmentAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DoctorAdminController;
use App\Http\Controllers\MajorAdminController;
use App\Http\Controllers\PatientAdminController;
use App\Models\Major;
use Illuminate\Support\Facades\Route;


// Route Client

Route::get('/', [ClientController::class, "home"])->name("home");
Route::get('/doctor', [ClientController::class, "doctor"])->name("doctor");
Route::get('/majors', [ClientController::class, "majors"])->name("majors");
Route::get('doctor/bookappoument/{doctor}', [ClientController::class, "BookAppoument"])->name("bookappoument");

// Route group Auth

Route::prefix("/auth")->name("auth.")->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");
    Route::post('/login', [AuthController::class, "submitLogin"])->name("submit.login");
    Route::get('/register', [AuthController::class, "register"])->name("register");
    Route::post('/register', [AuthController::class, "submitRegister"])->name("submit.register");
    Route::get('/contact', [AuthController::class, "contact"])->name("contact");
    Route::get('/logout', [AuthController::class, "logout"])->name("logout");
});

// Route group  Dashbord

Route::get('/dashbord', [AdminController::class, 'home'])->name("dashbord");
Route::resource('doctors', DoctorAdminController::class);
Route::resource('appointments', appointmentAdminController::class);
Route::resource('Majors' , MajorAdminController::class);
Route::resource('patients', PatientAdminController::class);
