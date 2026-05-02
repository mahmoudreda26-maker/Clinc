<?php

namespace App\Http\Controllers;

use App\Events\doctorCreatedEvent;
use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $doctors = Doctor::all();
        return view('admin.pages.doctors.doctor',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.doctors.create-doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.doctors.edit-doctor');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
