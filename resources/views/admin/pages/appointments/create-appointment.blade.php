@extends('admin.layouts.master')
@section('content')
@csrf
 			<div class="content-wrapper">
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Appointment</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('admin.appointments') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
				</section>
				<section class="content">
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label for="patient">Patient</label>
											<select name="patient" id="patient" class="form-control">
												<option value="">Select Patient</option>
												<option value="1">John Smith</option>
												<option value="2">Emma Wilson</option>
												<option value="3">Michael Brown</option>
												<option value="4">Sarah Davis</option>
												<option value="5">David Martinez</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="doctor">Doctor</label>
											<select name="doctor" id="doctor" class="form-control">
												<option value="">Select Doctor</option>
												<option value="1">Dr. Sarah Johnson - Cardiology</option>
												<option value="2">Dr. Michael Chen - Neurology</option>
												<option value="3">Dr. Emily Rodriguez - Pediatrics</option>
												<option value="4">Dr. James Wilson - Orthopedics</option>
												<option value="5">Dr. Lisa Anderson - Dermatology</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="date">Appointment Date</label>
											<input type="date" name="date" id="date" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="time">Appointment Time</label>
											<input type="time" name="time" id="time" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="type">Appointment Type</label>
											<select name="type" id="type" class="form-control">
												<option value="">Select Type</option>
												<option value="checkup">Checkup</option>
												<option value="followup">Follow-up</option>
												<option value="consultation">Consultation</option>
												<option value="emergency">Emergency</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="status">Status</label>
											<select name="status" id="status" class="form-control">
												<option value="pending">Pending</option>
												<option value="confirmed">Confirmed</option>
												<option value="completed">Completed</option>
												<option value="cancelled">Cancelled</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="symptoms">Symptoms/Reason</label>
											<textarea name="symptoms" id="symptoms" class="form-control" cols="30" rows="3" placeholder="Describe the symptoms or reason for visit"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="notes">Additional Notes</label>
											<textarea name="notes" id="notes" class="form-control" cols="30" rows="3" placeholder="Any additional notes or instructions"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pb-5 pt-3">
							<button class="btn btn-primary">Create</button>
							<a href="appointments.html" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
				</section>
			</div>
@endsection
