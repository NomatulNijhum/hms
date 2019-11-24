@extends('Dashboard.Home.app')

@section('title')
patient
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Patient</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Patients</li>
              <li class="breadcrumb-item active">Add Patient</li>
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
            <h3 class="widget-title">Add Patient</h3>

            <form id="patientcreate" action="{{route ('patient_create')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="patient-name">Patient Name</label>
                  <input type="text" name="Patient_Name" class="form-control" placeholder="Patient name" id="patient-name">
                </div>
                <div class="form-group col-md-6">
                  <label for="dob">Date Of Birth</label>
                  <input type="date" name="Date_Of_Birth" placeholder="Date of Birth" class="form-control" id="dob">
                </div>
                <div class="form-group col-md-6">
                  <label for="age">Age</label>
                  <input type="text" name="Age" placeholder="Age" class="form-control" id="age">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Phone</label>
                  <input type="text" name="Phone" placeholder="Phone" class="form-control" id="phone">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="Email" placeholder="email" class="form-control" id="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="Gender" id="gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <input type="text" name="Address" placeholder="email" class="form-control" id="Email">
                </div>
                <div class="form-group col-md-12">
                  <label for="file">File</label>
                  <input type="file" name="File" class="form-control" id="file">
                </div>


                <div class="form-group col-md-6 mb-3">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>
            <!-- Alerts-->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Successfully Done!</strong> Please add payment now
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
