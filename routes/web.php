<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, "home"])->name("home");
Route::get('/doctor', [ClientController::class, "doctor"])->name("doctor");
Route::get('/majors', [ClientController::class, "majors"])->name("majors");
Route::get('doctor/bookappoument/{doctor}', [ClientController::class, "BookAppoument"])->name("bookappoument");

Route::prefix("/auth")->name("auth.")->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");
    Route::post('/login', [AuthController::class, "submitLogin"])->name("submit.login");
    Route::get('/register', [AuthController::class, "register"])->name("register");
    Route::post('/register', [AuthController::class, "submitRegister"])->name("submit.register");
    Route::get('/contact', [AuthController::class, "contact"])->name("contact");
    Route::get('/logout', [AuthController::class, "logout"])->name("logout");
});

Route::prefix("/admin")->name("admin.")->group(function () {
    Route::view('/home', 'admin.pages.dashbord')->name("home");

    Route::view('/appointments', 'admin.pages.appointments.appointment')->name('appointments');
    Route::view('/appointment/create', 'admin.pages.appointments.create-appointment')->name('appointments.create');
    Route::view('/appointment/edit', 'admin.pages.appointments.edit-appointment')->name('appointments.edit');

    Route::view('/doctors', 'admin.pages.doctors.doctor')->name('doctors');
    Route::view('/doctors/create', 'admin.pages.doctors.create-doctor')->name('doctors.create');
    Route::view('/doctors/edit', 'admin.pages.doctors.edit-doctor')->name('doctors.edit');

    Route::view('/Majors','admin.pages.majors.major')->name('majors');
    Route::view('/Majors/create', 'admin.pages.majors.create-major')->name('majors.create');
    Route::view('/Majors/edit', 'admin.pages.majors.edit-major')->name('majors.edit');

    Route::view('/patients', 'admin.pages.patients.patient')->name('patients');
    Route::view('/patients/create', 'admin.pages.patients.create-patient')->name('patients.create');
    Route::view('/patients/edit', 'admin.pages.patients.edit-patient')->name('patients.edit');
});
