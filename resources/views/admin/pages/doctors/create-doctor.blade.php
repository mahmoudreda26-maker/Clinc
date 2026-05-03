@extends('admin.layouts.master')

@section('content')

<form method="POST" action="{{ route('doctors.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Doctor</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('doctors.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Dr. John Doe">
                                </div>
                                <x-validation-alert key="name" />
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="doctor@clinic.com">
                                </div>
                                <x-validation-alert key="email" />
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="+1 234-567-8900">
                                </div>
                                <x-validation-alert key="phone" />
                            </div>

                            <!-- Major -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Major</label>
                                    <select name="major_id" class="form-control">
                                        <option value="">Select Major</option>
                                        @foreach($majors as $major)
                                            <option value="{{ $major->id }}">{{ $major->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <x-validation-alertkey="major_id" />
                            </div>

                            <!-- License -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>License Number</label>
                                    <input type="text" name="license_number" class="form-control">
                                </div>
                            </div>

                            <!-- Experience -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Experience</label>
                                    <input type="number" name="experience" class="form-control">
                                </div>
                                <x-validation-alert key="experience" />
                            </div>

                            <!-- Qualification -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Qualification</label>
                                    <input type="text" name="qualification" class="form-control">
                                </div>
                            </div>

                            <!-- Fee -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Consultation Fee</label>
                                    <input type="number" name="consultation_fee" class="form-control">
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control" rows="3"></textarea>
                                </div>
                                <x-validation-alert key="address" />
                            </div>

                            <!-- Bio -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Bio</label>
                                    <textarea name="bio" class="form-control" rows="4"></textarea>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Profile Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <x-validation-alert key="image" />
                            </div>

                            <!-- Status -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <x-validation-alert key="status" />
                            </div>

                        </div>

                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('doctors.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>

            </div>
        </section>
    </div>

</form>

@endsection
