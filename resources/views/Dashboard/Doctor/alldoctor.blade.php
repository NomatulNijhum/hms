@extends('Dashboard.Home.app')

@section('title')
alldoctor
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Doctor</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Doctors</li>
								<li class="breadcrumb-item active">All Doctors</li>
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
							<h3 class="widget-title">Doctors List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6 offset-md-3">
                            <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Doctor Name</th>
																 <th scope="col">Department Name</th>
                                <th scope="col">Date Of Birth</th>

                                <th scope="col">Age</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Doctor Details</th>
                                <th scope="col">Address</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Action</th>

                              </tr>
                            </thead>
                            <tbody>

                      @foreach($doctors as $doctor)

                    <tr>
                    <th scope="row">{{ $doctor->id }}</th>
										<td>{{ $doctor->doctor_name}}</td>


                      <td>{{ $doctor->relationBetweenDepartment->department_name }}</td>
			               	<td>{{ $doctor->date_of_birth }}</td>
											<td>{{ $doctor->experience}}</td>
                     	<td>{{ $doctor->age}}</td>

											<td>{{ $doctor->phone }}</td>
											<td>{{ $doctor->email }}</td>
											<td>{{ $doctor->gender }}</td>
											<td>{{ $doctor->doctor_details }}</td>
											<td>{{ $doctor->address }}</td>
											<td><img width="50px" height="25px" src="{{url('images/'.$doctor->picture)}}"></td>
											<td>

                    </tr>


@endforeach










                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>
								<!--Export links-->

								<!-- /Export links-->

							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
