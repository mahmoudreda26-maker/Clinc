@extends('admin.layouts.master')
@section('content')

        <div class="content-wrapper">
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Create Doctor</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('admin.doctors') }}" class="btn btn-primary">Back</a>
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
											<input type="text" name="name" id="name" class="form-control" placeholder="Dr. John Doe">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" class="form-control" placeholder="doctor@clinic.com">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="phone">Phone</label>
											<input type="text" name="phone" id="phone" class="form-control" placeholder="+1 234-567-8900">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="major">Major/Specialization</label>
											<select name="major" id="major" class="form-control">
												<option value="">Select Major</option>
												<option value="1">Cardiology</option>
												<option value="2">Neurology</option>
												<option value="3">Pediatrics</option>
												<option value="4">Orthopedics</option>
												<option value="5">Dermatology</option>
												<option value="6">General Medicine</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="license_number">License Number</label>
											<input type="text" name="license_number" id="license_number" class="form-control" placeholder="MED-12345">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="experience">Years of Experience</label>
											<input type="number" name="experience" id="experience" class="form-control" placeholder="5">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="qualification">Qualification</label>
											<input type="text" name="qualification" id="qualification" class="form-control" placeholder="MBBS, MD">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="consultation_fee">Consultation Fee ($)</label>
											<input type="number" name="consultation_fee" id="consultation_fee" class="form-control" placeholder="100">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="address">Address</label>
											<textarea name="address" id="address" class="form-control" cols="30" rows="3" placeholder="Enter full address"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="bio">Bio/About</label>
											<textarea name="bio" id="bio" class="form-control" cols="30" rows="4" placeholder="Brief description about the doctor"></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="profile_image">Profile Image</label>
											<input type="file" name="profile_image" id="profile_image" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="status">Status</label>
											<select name="status" id="status" class="form-control">
												<option value="1">Active</option>
												<option value="0">Inactive</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pb-5 pt-3">
							<button class="btn btn-primary">Create</button>
							<a href="{{ route('admin.doctors') }}" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
				</section>
			</div>
            @endsection
