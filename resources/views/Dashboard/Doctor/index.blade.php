@extends('Dashboard.Home.app')

@section('title')
doctor
@endsection

@section('content')
<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Add Doctor</h3>


						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Doctors</li>
								<li class="breadcrumb-item active">Add Doctor</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Add Doctor</h3>

                <form id="doctorcreate" action="{{route ('doctor_create')}}" method="post" enctype="multipart/form-data">
                  @csrf


								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Doctor-name">Doctor Name</label>
										<input type="text" class="form-control" name="doctor_name" placeholder="Doctor name" id="Doctor-name">
									</div>
									<div class="form-group col-md-6">
										<label for="date_of_birth">Date Of Birth</label>
										<input type="date" name="date_of_birth" placeholder="Date of Birth"  class="form-control" id="date_of_birth">
                                    </div>
																		
                                    <div class="form-group col-md-6">
										<label for="department_name">Department Name</label>
										<input type="text" name="department_name" placeholder="department_name" class="form-control" id="department_name">
									</div>
									<div class="form-group col-md-6">
										<label for="experience">Experience</label>
										<input type="text" name="experience"placeholder="Experience" class="form-control" id="experience">
									</div>
									<div class="form-group col-md-6">
										<label for="age">Age</label>
										<input type="text" name="age" placeholder="Age" class="form-control" id="age">
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone</label>
										<input type="text"  name="phone" placeholder="Phone" class="form-control" id="phone">
									</div>
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" name="email" placeholder="email" class="form-control" id="Email">
									</div>
									<div class="form-group col-md-6">
										<label for="gender">Gender</label>
										<select class="form-control" name="gender" id="gender">
											<option>Male</option>
											<option>Female</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="about-doctor">Doctor Details</label>
										<textarea placeholder="Doctor Details"name="doctor_details"  class="form-control" id="about-doctor" rows="3"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
										<label for="address">Address</label>
										<textarea placeholder="Address" name="address"class="form-control" id="address" rows="3"></textarea>
									</div>
									<div class="form-group col-md-12">
										<label for="picture">Picture</label>
										<input type="file" name="picture"class="form-control" id="picture">
									</div>


									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Please Check in doctors list
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Holy guacamole!</strong> You should check in on some of those fields below.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<!-- /Alerts-->
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>

@endsection