@extends('Dashboard.Home.app')

@section('title')
all_case_study
@endsection

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">ALL Case Study</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">ALL Case Study</li>
								<li class="breadcrumb-item active">Case Study</li>
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
							<h3 class="widget-title">Case Study List</h3>
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
                                <th scope="col">Patient Name</th>
                                <th scope="col">Food Allergies</th>
                                <th scope="col">Tendency Bleed</th>
                                <th scope="col">Heart Disease</th>

                                <th scope="col">Blood Pressure</th>

                                <th scope="col">Diabetic</th>
                                <th scope="col">Surgery</th>


                                <th scope="col">Accident</th>
                                <th scope="col">Family Medical History</th>
                                <th scope="col">Current Medication</th>
                                <th scope="col">Female Pregnancy</th>
                                <th scope="col">Breast Feeding</th>

                                <th scope="col">Others</th>

                                <th scope="col">Health Insurance</th>
                                <th scope="col">Low Income</th>
                                <th scope="col">Reference</th>
                                <th scope="col">Action</th>

                              </tr>
                            </thead>
                            <tbody>

                              @foreach($prescriptions as $prescription)
                              <tr>
                                <th scope="row">{{ $prescription->id }}</th>
                                <td>{{ $prescription->relationBetweenPatient->Patient_Name}}</td>

                                <td>{{ $prescription->food_allergies }}</td>
                                <td>{{ $prescription->tendency_bleed }}</td>
                                <td>{{ $prescription->heart_disease}}</td>
                                  <td>{{ $prescription->blood_pressure}}</td>
                                <td>{{ $prescription->diabetic }}</td>
                                <td>{{ $prescription->surgery }}</td>
                                <td>{{ $prescription->accident }}</td>
                                <td>{{ $prescription->family_medical_history }}</td>
                                <td>{{ $prescription->current_medication }}</td>
                                <td>{{ $prescription->female_pregnancy}}</td>
                                <td>{{ $prescription->breast_feeding}}</td>
                                <td>{{ $prescription->others}}</td>
                                <td>{{ $prescription->health_insurance }}</td>
                                <td>{{ $prescription->low_income }}</td>
                                <td>{{ $prescription->reference }}</td>


																<td>


										<a href="{{ url('/allcasestudy') }}/{{ $prescription->id }}" class="btn btn-primary">Edit</a>
										<a href="{{ url('/deleteprescription') }}/{{ $prescription->id }}" class="btn btn-danger">Delete</a>
															 </td>
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
