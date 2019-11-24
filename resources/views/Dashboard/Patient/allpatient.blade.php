@extends('Dashboard.Home.app')

@section('title')
allpatient
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">Patients</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">Patients</li>
								<li class="breadcrumb-item active">All Patients</li>
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
							<h3 class="widget-title">Patients List</h3>
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


                                <th scope="col">#</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Age</th>
                                <th scope="col">Phone</th>

                                <th scope="col">Email</th>

                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>


                                <th scope="col">File</th>
                                <th scope="col">Action</th>



                              </tr>
                            </thead>
                            <tbody>

                              @foreach($patients as $patient)
                              <tr>
                                <th scope="row">{{ $patient->id }}</th>
                                <td>{{ $patient->Patient_Name }}</td>
                                <td>{{ $patient->Date_Of_Birth }}</td>
                                <td>{{ $patient->Age }}</td>
                                <td>{{ $patient->Phone}}</td>
                                <td>{{ $patient->Email }}</td>
                                <td>{{ $patient->Gender }}</td>
                                <td>{{ $patient->Address }}</td>
                                <td>{{ $patient->File }}</td>

																<td>
																	<a href="{{ url('/allpatient') }}/{{ $patient->id }}" class="btn btn-primary">Edit</a>
																<a href="{{ url('/deletepatient') }}/{{ $patient->id }}" class="btn btn-danger">Delete</a>
															 </td>
                              </tr>
                          @endforeach
                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>
								<!--Export links-->
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-download"></span> csv</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-printer"></span>  print</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav>
								<!-- /Export links-->
								<button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
								<button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
			</div>
@endsection
