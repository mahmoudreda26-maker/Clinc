<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
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
            $file = $request->file('image');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('doctors', $file_name, 'public');
            $data['image'] = 'doctors/' . $file_name;
        }
        Doctor::create($data);
        return redirect()->route('doctors.index')->with("success", " Doctor Created Successfuly");
    }
    public function edit(Doctor $doctor)
    {
        $majors = Major::all();
        return view('admin.pages.doctors.edit-doctor', compact("doctor", "majors"));
    }


    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($doctor->image) {
                Storage::disk('public')->delete($doctor->image);
            }
            $file = $request->file('image');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('doctors', $file_name, 'public');
            $data['image'] = 'doctors/' . $file_name;
        }
        $doctor->update($data);
        return redirect()->route('doctors.index')
            ->with("success", "Doctor Updated Successfully");
    }
    public function destroy(Doctor $doctor)
    {
        if ($doctor->image) {
            Storage::disk('public')->delete($doctor->image);
        }
        $doctor->delete($doctor);
        return redirect()->route('doctors.index')
            ->with("success", "Doctor Delet Successfully");
    }
}
