<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Major;

use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        $patients= Patient::count();
        $doctors = Doctor::count();
        $majors = Major::count();
        $appointments = Appointment::count();
        $admin = Auth::user();
        return view('admin.pages.dashbord', compact('admin' ,'appointments' , 'doctors' ,'majors' , 'patients'));
    }
}
