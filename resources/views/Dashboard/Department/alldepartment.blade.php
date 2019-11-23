@extends('Dashboard.Home.app')

@section('title')
alldepartment
@endsection

@push('css')

@endpush

@section('content')

<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
						<div class="col-md-6">
							<h3 class="block-title">departments</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">departments</li>
								<li class="breadcrumb-item active">All departments</li>
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
							<h3 class="widget-title">department List</h3>
							<div class="table-responsive mb-3">
								<table id="tableId" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th class="no-sort">


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
                                <th scope="col">Department Name</th>
                                <th scope="col">Description</th>





                              </tr>
                            </thead>
                            <tbody>

                              @foreach($departments as $department)
                              <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->department_name }}</td>
                                <td>{{ $department->description}}</td>


                              </tr>
                          @endforeach
                            </tbody>
                            </table>

                          </div>

                        </div>

                      </div>
								<!--Export links-->

					<!-- /Widget Item -->
				</div>
			</div>
@endsection

@push('scripts')
                <script>
                    $(document).ready(function() {
                        $('#dataTable').DataTable();
                    } );
                </script>
@endpush
