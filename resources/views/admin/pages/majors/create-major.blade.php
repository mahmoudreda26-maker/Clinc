@extends('admin.layouts.master')

@section('content')
    <form method="POST" action="{{ route('majors.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid my-2">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Create Major/Specialization</h1>
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
                                            placeholder="e.g., Cardiology">
                                        <x-validation-alert key="name" />
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="desc" id="description" class="form-control" rows="5" placeholder="Brief description..."></textarea>
                                        <x-validation-alert key="description" />
                                    </div>
                                </div>

                                {{-- Status --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- Slug --}}
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" id="slug" class="form-control"
                                            placeholder="auto-generated or custom slug">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="pb-5 pt-3">
                        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.form.submit();">
                            Create
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
