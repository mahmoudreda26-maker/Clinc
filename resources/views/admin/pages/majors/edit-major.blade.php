@extends('admin.layouts.master')
@section('content')

			<div class="content-wrapper">
				<section class="content-header">
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Edit Major/Specialization</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{ route('admin.majors') }}" class="btn btn-primary">Back</a>
							</div>
						</div>
					</div>
				</section>
				<section class="content">
					<div class="container-fluid">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label for="name">Major Name</label>
											<input type="text" name="name" id="name" class="form-control" placeholder="e.g., Cardiology" value="Cardiology">
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="description">Description</label>
											<textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Brief description of this medical specialization">Heart and cardiovascular system</textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="icon">Icon Class (Optional)</label>
											<input type="text" name="icon" id="icon" class="form-control" placeholder="fas fa-heart" value="fas fa-heart">
											<small class="text-muted">FontAwesome icon class</small>
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
							<a href="majors.html" class="btn btn-outline-dark ml-3">Cancel</a>
						</div>
					</div>
				</section>
			</div>
@endsection
