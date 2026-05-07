<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOppointmentsRequest;
use App\Http\Requests\UpdateOppointmentsRequest;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class appointmentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $appointments=Appointment::paginate(7);
       $doctors =Doctor::all();
        return view('admin.pages.appointments.appointment',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $doctors =Doctor::all();
          $patients = Patient::all();
        return view('admin.pages.appointments.create-appointment' ,compact('doctors', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(CreateOppointmentsRequest $request)
{
    $data = $request->validated();
    Appointment::create($data);

    return redirect()->route('appointments.index')
        ->with('success', 'Appointment created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(Appointment $appointment)
{
    $patients = Patient::all();
    $doctors = Doctor::all();

    return view('admin.pages.appointments.edit-appointment', compact('appointment', 'patients', 'doctors'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(UpdateOppointmentsRequest $request, Appointment $appointment)
{
    $data = $request->validated();

    $appointment->update($data);

    return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Appointment $appointment)
{
    $appointment->delete( $appointment);

    return redirect()
        ->route('appointments.index')
        ->with("success", "Appointment deleted successfully");
}
}
