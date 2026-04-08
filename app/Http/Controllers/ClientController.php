<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Dom\Comment;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function home(Request $request)
    {
        $doctors = Doctor::with("major");

        if ($request->has('slug')) {
            $major = Major::where("slug", $request->slug)->firstOrFail();
            $doctors = $doctors->where("major_id", $major->id);
        }

        $doctors = $doctors->paginate(6)->withQueryString();
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

    function doctor(Request $request)
    {
        $doctors = Doctor::with("major");

        if ($request->has('slug')) {
            $major = Major::where("slug", $request->slug)->firstOrFail();
            $doctors = $doctors->where("major_id", $major->id);
        }

        $doctors = $doctors->paginate(10)->withQueryString();;

        $majors = Major::select("id", "name", "slug")->get();
        return view('client.pages.doctor', compact("majors", "doctors"));
    }

    function BookAppoument(Doctor $doctor)
    {
        return view('client.pages.bookappoument', compact("doctor"));
    }
}
