@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Appointment</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('appointments.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

    <form method="POST" action="{{ route('appointments.update',$appointment->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Patient</label>
                                    <select name="patient_id" class="form-control">
                                        @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}"
                                                {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>
                                                {{ $patient->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Doctor</label>
                                    <select name="doctor_id" class="form-control">
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}"
                                                {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                                                {{ $doctor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Appointment Date</label>
                                    <input type="date" name="appointment_date"
                                           value="{{ $appointment->appointment_date }}"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Appointment Time</label>
                                    <input type="time" name="appointment_time"
                                           value="{{ $appointment->appointment_time }}"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Appointment Type</label>
                                    <select name="appointment_type" class="form-control">
                                        <option value="checkup">Checkup</option>
                                        <option value="followup" >Follow-up</option>
                                        <option value="consultation" >Consultation</option>
                                        <option value="emergency" >Emergency</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="pending">Pending</option>
                                        <option value="confirmed" >Confirmed</option>
                                        <option value="completed" >Completed</option>
                                        <option value="cancelled" >Cancelled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Symptoms/Reason</label>
                                    <textarea name="reason" class="form-control" cols="30" rows="3">{{ $appointment->reason }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Additional Notes</label>
                                    <textarea name="additional_notes" class="form-control" cols="30" rows="3">{{ $appointment->additional_notes }}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('appointments.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>

            </form>

        </div>
    </section>
</div>

@endsection
