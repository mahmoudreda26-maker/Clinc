<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(10);
        return view('admin.pages.patients.patient', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.patients.create-patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePatientRequest $request)
    {
        $data=$request->validated();
        Patient::create($data);
                return redirect()->route('patients.index')
            ->with("success", "created patient Successfully");
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
    public function edit(string $id)
    {
         $patient = Patient::findOrFail($id);
        return view('admin.pages.patients.edit-patient' , compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $data=$request->validated();
      $patient->update($data);
        return redirect()->route('patients.index')
            ->with("success", "patient Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete($patient);
        return redirect()->route('patients.index')
            ->with("success", "patient Delet Successfully");
    }
}
