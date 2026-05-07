@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Appointment</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('appointments.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">

                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="patient">Patient</label>
                                        <select name="patient_id" id="patient" class="form-control">

                                            @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}">Select Patient</option>
                                                <option value=""> {{ $patient->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="doctor">Doctor</label>
                                        <select name="doctor_id" id="doctor" class="form-control">

                                            @foreach ($doctors as $doctor)
                                                  <option value="{{ $doctor->id }}">Select Doctor</option>
                                                <option value=""> {{ $doctor->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="date">Appointment Date</label>
                                        <input type="date" name="appointment_date" id="date" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="time">Appointment Time</label>
                                        <input type="time" name="appointment_time" id="time" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="type">Appointment Type</label>
                                        <select name="appointment_type" id="type" class="form-control">
                                            <option value="">Select Type</option>
                                            <option value="checkup">Checkup</option>
                                            <option value="followup">Follow-up</option>
                                            <option value="consultation">Consultation</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="pending">Pending</option>
                                            <option value="confirmed">Confirmed</option>
                                            <option value="completed">Completed</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="symptoms">Symptoms/Reason</label>
                                        <textarea name="reason" id="symptoms" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="notes">Additional Notes</label>
                                        <textarea name="additional_notes" id="notes" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="pb-5 pt-3">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('appointments.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                    </div>

                </form>

            </div>
        </section>
    </div>
@endsection
