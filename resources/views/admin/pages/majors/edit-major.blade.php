@extends('admin.layouts.master')

@section('content')

<form method="POST" action="{{ route('majors.update', $major->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Major/Specialization</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('majors.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            {{-- Name --}}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name">Major Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="e.g., Cardiology"
                                           value="{{ old('name', $major->name) }}">
                                    <x-validation-alert key="name" />
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="5"
                                              placeholder="Brief description...">{{ old('description', $major->description) }}</textarea>
                                    <x-validation-alert key="description" />
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" @selected(old('status', $major->status) == 1)>Active</option>
                                        <option value="0" @selected(old('status', $major->status) == 0)>Inactive</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary"
                            onclick="this.disabled=true;this.form.submit();">
                        Update
                    </button>

                    <a href="{{ route('majors.index') }}" class="btn btn-outline-dark ml-3">
                        Cancel
                    </a>
                </div>

            </div>
        </section>
    </div>

</form>

@endsection
