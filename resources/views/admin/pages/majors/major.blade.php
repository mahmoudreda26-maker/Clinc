@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <h1 class="m-0">Majors / Specializations</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('majors.create') }}" class="btn btn-primary">
                        + New Major
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card shadow-sm">

                <div class="card-header bg-white">
                    <div class="d-flex justify-content-end">
                        <div class="input-group" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control"
                                   placeholder="Search...">

                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">

                    <table class="table table-hover align-middle text-center">

                        <thead class="bg-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Doctors</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($majors as $major)
                                <tr>

                                    <td>{{ $major->id }}</td>
                                    <td class="fw-bold">{{ $major->name }}</td>
                                    <td>{{ $major->desc }}</td>
                                    <td>{{ $major->doctors_count ?? 0 }}</td>

                                    <td>
                                        @if($major->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td class="d-flex justify-content-center gap-2">

                                        <a href="{{ route('majors.edit', $major->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Edit
                                        </a>

                                        <form action="{{ route('majors.destroy', $major->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

                <div class="card-footer clearfix">
                    <div class="float-right">
                        {{ $majors->links() }}
                    </div>
                </div>

            </div>

        </div>
    </section>

</div>

@endsection
