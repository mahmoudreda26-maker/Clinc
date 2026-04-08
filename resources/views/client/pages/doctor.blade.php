@extends('client.layouts.master')
@section('page_title', 'Doctors')
@section('front-content')

<h2 class="h1 fw-bold text-center my-4">Doctors</h2>

<div class="container">
    <div class="row g-4">
        {{-- @php($doctors) --}}
        @forelse($doctors as $doctor)
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card p-3 text-center h-100">
                    <img src="{{ $doctor->imagUrl() }}"
                         class="card-img-top rounded-circle mx-auto mb-2"
                         style="width:120px;height:120px;object-fit:cover;"
                         alt="{{ $doctor->name }}">

                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h5 class="card-title fw-bold">{{ $doctor->name }}</h5>
                        <h6 class="text-muted">{{ $doctor->major->name}}</h6>
                        <a href="{{ route('bookappoument' , $doctor->id) }}" class="btn btn-outline-primary mt-2">
                            Book an appointment
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="fa fa-user-md fa-4x text-secondary mb-3"></i>
                <h2 class="fw-bold text-danger">No Doctors Found</h2>
                <p class="text-muted">There are no doctors available at the moment.</p>
            </div>
        @endforelse
    </div>

<div class="text-center mt-3 d-flex justify-content-center">
    {{ $doctors->links() }}
</div>
</div>
@endsection
