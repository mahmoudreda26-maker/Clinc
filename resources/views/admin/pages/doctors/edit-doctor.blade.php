@extends('admin.layouts.master')

@section('content')
    <form method="POST" action="{{ route('doctors.update',$doctor->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid my-2">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Doctor</h1>
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
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Dr. John Doe" value="{{ old('name' , $doctor->name) }}">
                                    </div>
                                    <x-validation-alert key="name" />
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="doctor@clinic.com" value="{{ old('email' , $doctor->email)}}">
                                    </div>
                                    <x-validation-alert key="email" />
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="+1 234-567-8900" value="{{ old('phone' , $doctor->phone)}}" >
                                    </div>
                                    <x-validation-alert key="phone" />
                                </div>

                                <!-- Major -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Major</label>
                                        <select name="major_id" class="form-control" ">
                                            <option value="">Select Major</option>
                                            @foreach ($majors as $major)
                                                <option value="{{ $major->id }}" {{ old('major_id', $doctor->major_id) == $major->id ? 'selected': '' }}>{{ $major->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-validation-alert key="major_id" />
                                </div>

                                <!-- Address -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" rows="3"></textarea>
                                    </div>
                                    <x-validation-alert key="address" />
                                </div>

                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Profile Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    @if($doctor->image)
                                    <div>
                                        <a href="{{ asset('storage/'.$doctor->image) }}"></a>
                                    </div>
                                    @endif
                                    <x-validation-alert key="image" />
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
