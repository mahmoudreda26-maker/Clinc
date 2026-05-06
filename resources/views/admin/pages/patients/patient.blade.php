@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Patients</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('patients.create') }}" class="btn btn-primary">
                        New Patient
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">


                <!-- Table -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Blood Group</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($patients as $patient)
                            <tr>
                                <td>{{ $patient->id }}</td>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->email }}</td>
                                <td>{{ $patient->phone }}</td>

                                <!-- Age -->
                                <td>
                                    {{ \Carbon\Carbon::parse($patient->date_of_birth)->age }} years
                                </td>

                                <td>{{ $patient->gender }}</td>
                                <td>{{ $patient->blood_group }}</td>

                                <!-- Status -->
                                <td>
                                    @if($patient->status == 'active')
                                        <span class="text-success font-weight-bold">Active</span>
                                    @else
                                        <span class="text-danger font-weight-bold">Inactive</span>
                                    @endif
                                </td>

                                <!-- Actions -->
                                <td class="d-flex">

                                    <!-- Edit -->
                                    <a href="{{ route('patients.edit', $patient->id) }}"
                                       class="text-primary mr-2">
                                        <svg class="w-4 h-4"
                                             xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                        </svg>
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('patients.destroy', $patient->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('هل أنت متأكد من حذف هذا المريض؟')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="text-danger border-0 bg-transparent">
                                            <svg class="w-4 h-4"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">
                                    No patients found
                                </td>
                            </tr>
                        @endforelse
                        </tbody>

                    </table>
                </div>

                <!-- Pagination -->
                <div class="card-footer clearfix">
                    {{ $patients->withQueryString()->links() }}
                </div>

            </div>

        </div>
    </section>

</div>
@endsection
