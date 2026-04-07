<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function home()
    {
        $majors = Major::select("id", "name", "slug")->get();
        $doctors = Doctor::with("major")->get();
        return view('client.pages.home', compact("majors", "doctors"));
    }
    function majors()
    {
        $majors = Major::select("id", "name", "slug")->get();
        $doctors = Doctor::with("major")->get();
        return view('client.pages.majors', compact("majors", "doctors"));
    }
    function doctor()
    {
        $majors = Major::select("id", "name", "slug")->get();
        $doctors = Doctor::with("major")->get();
        return view('client.pages.doctor', compact("majors", "doctors"));
    }
    function BookAppoument()
    {
        return view('client.pages.bookappoument');
    }
}
