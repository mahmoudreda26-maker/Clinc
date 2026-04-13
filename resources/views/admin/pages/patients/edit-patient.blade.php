@extends('admin.layouts.master')
@section('content')
			<div class="content-wrapper">
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Edit Patient</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('admin.patients') }}" class="btn btn-primary">Back</a>
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
											<label for="name">Full Name</label>
											<input type="text" name="name" id="name" class="form-control" placeholder="John Doe" value="John Smith">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" class="form-control" placeholder="patient@email.com" value="john.smith@email.com">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="phone">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control" placeholder="+1 234-567-8900" value="+1 234-567-1001">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="date_of_birth">Date of Birth</label>
											<input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="1979-05-15">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="age">Age</label>
											<input type="number" name="age" id="age" class="form-control" placeholder="25" value="45">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="gender">Gender</label>
											<select name="gender" id="gender" class="form-control">
												<option value="">Select Gender</option>
												<option value="male" selected>Male</option>
												<option value="female">Female</option>
												<option value="other">Other</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="blood_group">Blood Group</label>
											<select name="blood_group" id="blood_group" class="form-control">
												<option value="">Select Blood Group</option>
												<option value="A+">A+</option>
												<option value="A-">A-</option>
												<option value="B+">B+</option>
												<option value="B-">B-</option>
												<option value="O+" selected>O+</option>
												<option value="O-">O-</option>
												<option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="emergency_contact">Emergency Contact</label>
											<input type="text" name="emergency_contact" id="emergency_contact" class="form-control" placeholder="+1 234-567-8900" value="+1 234-567-2001">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="address">Address</label>
											<textarea name="address" id="address" class="form-control" cols="30" rows="3" placeholder="Enter full address">456 Oak Street, Apt 12, New York, NY 10002</textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="medical_history">Medical History</label>
											<textarea name="medical_history" id="medical_history" class="form-control" cols="30" rows="4" placeholder="Any pre-existing conditions, allergies, medications, etc.">Hypertension, Type 2 Diabetes. Allergic to Penicillin. Currently taking Metformin 500mg twice daily.</textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="status">Status</label>
											<select name="status" id="status" class="form-control">
												<option value="1" selected>Active</option>
												<option value="0">Inactive</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pb-5 pt-3">
							<button class="btn btn-primary">Update</button>
							<a href="{{ route('admin.patients') }}" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
				</section>
			</div>
@endsection
