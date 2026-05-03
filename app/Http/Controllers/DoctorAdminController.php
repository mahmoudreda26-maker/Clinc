<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class DoctorAdminController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with("major")->paginate(10);
        return view('admin.pages.doctors.doctor', compact('doctors'));
    }


    public function create()
    {
        $majors = Major::all();
        return view('admin.pages.doctors.create-doctor', compact('majors'));
    }
    public function store(CreateDoctorRequest $request)
    {
        $data = $request->validated();

if ($request->hasFile('image')) {
    $data['image'] = $request->file('image')->store('doctors', 'public');
}
        dd($data);
    }

    public function edit($id)
    {
        return view('admin.pages.doctors.edit-doctor');
    }

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
