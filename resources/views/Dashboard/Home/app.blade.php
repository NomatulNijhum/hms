<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
    @yield('title')
  </title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/images/fav.png')}}">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/green.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
	<!-- morris charts -->
	<link rel="stylesheet" href="{{asset('frontend/assets/charts/css/morris.css')}}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-jvectormap.css')}}">

	<script src="{{asset('frontend/assets/js/modernizr.min.js')}}"></script>
</head>



<body>
	<!-- Pre Loader -->

	<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default theme-active" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div>
	<!-- /Color Changer -->
	<div class="wrapper"style="padding:0px">
		<!-- Page Content -->
		<div id="content"style="padding:0px">
			<!-- Top Navigation -->

			<div class="container-fluid"style="padding:0px">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<div class="sidebar-header"> <a href="index.html"><img src="{{asset('frontend/assets/images/logo-dark.png')}}"class="logo" alt="logo"></a>
						</div>
					</div>
					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link">
								<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target=".mentalcare">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade mentalcare" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
				</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
							 aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
							 aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>Nijhum</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
									<a class="dropdown-item" href="#">
										<span class="ti-help-alt"></span>Login</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>

							</div>
						</li>
					</ul>

				</nav>
			</div>

			<!-- /Top Navigation -->
			<!-- Menu -->
			<div class="container menu-nav">

				<nav class="navbar navbar-expand-lg proclinic-bg text-white">
					<button class="navbar-toggler" ype="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="ti-menu text-white"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown active">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-home"></span> Dashboard</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/dashboard"> Dashboard Index</a>
								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span> Role</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="role">Add Role </a>
									<a class="dropdown-item" href="allrole">All Role</a>

								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span> Department</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="Department">Add Department</a>
									<a class="dropdown-item" href="alldepartment">All Department</a>


								</div>
							</li>





							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span> Doctors</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="doctor">Add Doctor</a>
									<a class="dropdown-item" href="alldoctor">All Doctors</a>
									<a class="dropdown-item" href="about-doctor.html">Doctor Details</a>
									<a class="dropdown-item" href="edit-doctor.html">Edit Doctor</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-wheelchair"></span> Patients</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="patient">Add Patient</a>
									<a class="dropdown-item" href="allpatient">All Patients</a>
									<a class="dropdown-item" href="patientdetails">Patient Details</a>
									<a class="dropdown-item" href="edit-patient.html">Add Document </a>
									<a class="dropdown-item" href="edit-patient.html">All Document </a>

								</div>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-key"></span> Schedule</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="schedule">Add Schedule</a>
									<a class="dropdown-item" href="allschedule">All Schedules  </a>

								</div>
							</li>


							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-pencil-alt"></span> Appointments</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="appointment">Add Appointment</a>
									<a class="dropdown-item" href="allappointment">All Appointments</a>
									<a class="dropdown-item" href="about-appointment.html">Appointment Details</a>
									<a class="dropdown-item" href="edit-appointment.html">Edit Appointment</a>
								</div>
							</li>


							<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
						 aria-expanded="false"><span class="ti-pencil-alt"></span> Prescription</a>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="add_case_study">Add Patient Case Study</a>
																<a class="dropdown-item" href="all_case_study">All Patients Case Study</a>
																<a class="dropdown-item" href="about-appointment.html">Add Prescription</a>
															</div>
														</li>

														<li class="nav-item dropdown">
															<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
															 aria-expanded="false"><span class="ti-key"></span> Room Allotments</a>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="addroom">Add Room Allotment</a>
																<a class="dropdown-item" href="allroom">All Rooms</a>
																<a class="dropdown-item" href="edit-room.html">Edit Room Allotment</a>
															</div>
														</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-money"></span> Payments</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="addpayment">Add Payment</a>
									<a class="dropdown-item" href="payments.html">All Payments</a>
									<a class="dropdown-item" href="about-payment.html">Payment Invoice</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false"><span class="ti-user"></span>Human Resources</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="doctor">Add Employee</a>
									<a class="dropdown-item" href="doctors.html">All Accountants</a>
									<a class="dropdown-item" href="about-doctor.html">All Laboratories</a>
									<a class="dropdown-item" href="edit-doctor.html">All Nurses</a>
									<a class="dropdown-item" href="edit-doctor.html">All Pharmacists</a>
									<a class="dropdown-item" href="edit-doctor.html">All Receptionists</a>

									<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
											 aria-expanded="false"><span class="ti-pencil-alt"></span> Activities</a>
																	<div class="dropdown-menu">
																		<a class="dropdown-item" href="Birthreport">Add Birth Report</a>
																		<a class="dropdown-item" href="allBirthreport">All Birth Reports</a>
																		<a class="dropdown-item" href="Deathreport">Add Dealth Report</a>
																		<a class="dropdown-item" href="allDeathreports">All Dealth Reports </a>
																		<a class="dropdown-item" href="Operation">Add Operation  Reports</a>
																				<a class="dropdown-item" href="alloperationreport">All Operation  Reports </a>
																		<a class="dropdown-item" href="Investigation">Add Investigation Report<</a>
																		<a class="dropdown-item" href="allinvestigation">All Investigation Reports</a>

									                  <a class="dropdown-item" href="addmedicine">Add Medicine </a>
																		<a class="dropdown-item" href="allmedicine">All Medicines</a>	</div>


																</li>
										</li>
								</div>
							</li>
								</div>
							</li>

						</ul>
					</div>
				</nav>
			</div>








      @yield('content')






				<div class="d-sm-flex justify-content-center">
				  <span class="text-muted text-center d-block d-sm-inline-block">N.J Nijhum,,16103226,Fall 2019 <a href="" target="_blank"></a>. All rights reserved.</span>
				</div>
			</div>
			<!-- /Copy Rights-->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
   <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
	<!-- Popper Library-->
	<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
	<!-- Bootstrap Library-->
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<!-- morris charts -->
	<script src="{{asset('frontend/assets/charts/js/raphael-min.js')}}"></script>
	<script src="{{asset('frontend/assets/charts/js/morris.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/custom-morris.js')}}"></script>

	<!-- Custom Script-->
	<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
</body>



</html>
