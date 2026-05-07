@extends('admin.layouts.master') @section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Patient</h1>
                    </div>
                    <div class="col-sm-6 text-right"> <a href="{{ route('patients.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('patients.store') }}" method="POST"> @csrf <div class="card">
                        <div class="card-body">
                            <div class="row"> <!-- Name -->
                                <div class="col-md-6 mb-3"> <label>Full Name</label> <input type="text" name="name"
                                        class="form-control"> @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Email -->
                                <div class="col-md-6 mb-3"> <label>Email</label> <input type="email" name="email"
                                        class="form-control"> @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Phone -->
                                <div class="col-md-6 mb-3"> <label>Phone</label> <input type="text" name="phone"
                                        class="form-control"> @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Date of Birth -->
                                <div class="col-md-6 mb-3"> <label>Date of Birth</label> <input type="date"
                                        name="date_of_birth" class="form-control"> @error('date_of_birth')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Age -->
                                <div class="col-md-6 mb-3"> <label>Age</label> <input type="number" name="age"
                                        class="form-control"> @error('age')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Gender -->
                                <div class="col-md-6 mb-3"> <label>Gender</label> <select name="gender"
                                        class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select> @error('gender')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Blood Group -->
                                <div class="col-md-6 mb-3"> <label>Blood Group</label> <select name="blood_group"
                                        class="form-control">
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select> @error('blood_group')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Emergency Contact -->
                                <div class="col-md-6 mb-3"> <label>Emergency Contact</label> <input type="text"
                                        name="emergency_contact" class="form-control"
                                        value="{{ old('emergency_contact') }}"> @error('emergency_contact')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Address -->
                                <div class="col-md-12 mb-3"> <label>Address</label>
                                    <textarea name="address" class="form-control"></textarea> @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Medical History -->
                                <div class="col-md-12 mb-3"> <label>Medical History</label>
                                    <textarea name="medical_history" class="form-control"></textarea> @error('medical_history')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> <!-- Status -->
                                <div class="col-md-6 mb-3"> <label>Status</label> <select name="status"
                                        class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select> @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3"> <button type="submit" class="btn btn-primary">Create</button> <a
                            href="{{ route('patients.index') }}" class="btn btn-dark">Cancel</a> </div>
                </form>
            </div>
        </section>
    </div>
@endsection
