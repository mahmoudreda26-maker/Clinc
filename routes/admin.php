<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentAdminController;
use App\Http\Controllers\DoctorAdminController;
use App\Http\Controllers\MajorAdminController;
use App\Http\Controllers\PatientAdminController;
use Illuminate\Support\Facades\Route;


// Route group  Dashbord

Route::get('/dashbord', [AdminController::class, 'home'])->name("dashbord");
Route::resource('doctors', DoctorAdminController::class);
Route::resource('appointments', appointmentAdminController::class);
Route::resource('Majors' , MajorAdminController::class);
Route::resource('patients', PatientAdminController::class);
