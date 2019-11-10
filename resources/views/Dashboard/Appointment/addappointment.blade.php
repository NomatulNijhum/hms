@extends('Dashboard.Home.app')

@section('title')
Add Appointment
@endsection

@section('content')
<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Add Appointment</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Appointments</li>
								<li class="breadcrumb-item active">Add Appointment</li>
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
							<h3 class="widget-title">Add Appointment</h3>
              <form id="appointmentcreate" action="{{route ('appointment_create')}}" method="post" enctype="multipart/form-data">
                @csrf

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="patient_id">Patient ID</label>
										<input type="text"name="patient_id" class="form-control" placeholder="patient_id" id="patient_id">
									</div>
									<div class="form-group col-md-6">
										<label for="department">Department</label>
										<select class="form-control"name="department" id="department">
											<option>Neuro</option>
											<option>Ortho</option>
											<option>General</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="doctor_name">Doctor Name</label>
										<input type="text"name="doctor_name" placeholder="doctor_name" class="form-control" id="doctor_name">
									</div>
									<div class="form-group col-md-6">
										<label for="appointment_date">Appointment Date</label>
										<input type="date" name="appointment_date" placeholder="appointment_date" class="form-control" id="appointment_date">
									</div>
									<div class="form-group col-md-6">
										<label for="time_slot">Time Slot</label>
										<select class="form-control" name="time_slot"id="time_slot">
											<option>10AM-11AM</option>
											<option>11AM-12pm</option>
											<option>12PM-01PM</option>
											<option>2PM-3PM</option>
											<option>3PM-4PM</option>
											<option>4PM-5PM</option>
											<option>6PM-7PM</option>
											<option>7PM-8PM</option>
											<option>8PM-9PM</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="token_number">Token Number <small>(Auto Generated)</small></label>
										<input type="text" name="token_number"placeholder="token_number" class="form-control" id="token_number">
									</div>
									<div class="form-group col-md-12">
										<label for="problem">Problem</label>
										<textarea placeholder="Problem" name="problem" class="form-control" id="problem" rows="3"></textarea>
									</div>

									<div class="form-group col-md-6 mb-3">
										<button type="submit" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</form>
							<!-- Alerts-->
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Successfully Done!</strong> Appointment token Generated
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
