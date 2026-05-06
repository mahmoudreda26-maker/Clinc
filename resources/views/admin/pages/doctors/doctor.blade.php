@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">


        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Doctors</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('doctors.create') }}" class="btn btn-primary">
                            New Doctor
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <x-alert />
        <section class="content">
            <div class="container-fluid">

                <div class="card">

                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group" style="width: 250px;">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-default">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover text-nowrap">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Major</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->phone }}</td>

                                        <td>
                                            {{ $doctor->major->name ?? 'No Major' }}
                                        </td>

                                        <td class="d-flex">

                                            <a href="{{ route('doctors.edit', $doctor->id) }}"
                                                class="btn btn-sm btn-primary mr-2">
                                                Edit
                                            </a>

                                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this doctor?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    Delete
                                                </button>

                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            No doctors found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>

                    </div>


                    <div class="card-footer clearfix">
                        {{ $doctors->links() }}
                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
