@extends("admin.layouts.master")
@section("content")
			<div class="content-wrapper">
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Dashboard</h1>
							</div>
						</div>
					</div>
				</section>
				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>{{ $patients }}</h3><p>Patients</p></div><div class="icon"><i class="fas fa-user-injured"></i></div></div></div>
							<div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>{{ $doctors }}</h3><p>Doctors</p></div><div class="icon"><i class="fas fa-user-md"></i></div></div></div>
							<div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>{{ $appointments }}</h3><p>Appointments</p></div><div class="icon"><i class="fas fa-calendar-check"></i></div></div></div>
							<div class="col-lg-3 col-6"><div class="small-box card"><div class="inner"><h3>{{ $majors }}</h3><p>Major</p></div><div class="icon"><i class="fas fa-dollar-sign"></i></div></div></div>
						</div>
					</div>
				</section>
			</div>
            @endsection
