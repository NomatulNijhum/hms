@extends('Dashboard.Home.app')

@section('title')
editpatient
@endsection

@section('content')
<!-- Breadcrumb -->
      <!-- Page Title -->
                  <div class="container mt-0">
                    <div class="row breadcrumb-bar">
                      <div class="col-md-6">
                        <h3 class="block-title">Edit  Patient</h3>
                      </div>
                      <div class="col-md-6">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="index.html">
                              <span class="ti-home"></span>
                            </a>
                          </li>
                          <li class="breadcrumb-item">Edit Patients</li>
                          <li class="breadcrumb-item active">Edit Patient</li>
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
                <input type="text" name="Patient_Name" value="{{ $single_patient->Patient_Name }}" class="form-control" placeholder="Patient name" id="patient-name">
                </div>
                <div class="form-group col-md-6">
                  <label for="dob">Date Of Birth</label>
                  <input type="date" name="Date_Of_Birth" value="{{ $single_patient->Date_Of_Birth }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
                  </div>
                <div class="form-group col-md-6">
                  <label for="age">Age</label>
                  <input type="text" name="Age" value="{{ $single_patient->Age }}" class="form-control" placeholder="Date_Of_Birth" id="Date_Of_Birth">
                  </div>
                <div class="form-group col-md-6">
                  <label for="phone">Phone</label>
                  <input type="text" name="Phone" value="{{ $single_patient->Phone }}" class="form-control" placeholder="Phone" id="Phone">
                  </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="text" name="Email" value="{{ $single_patient->Email }}" class="form-control" placeholder="Email" id="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="Gender" id="gender">
                      <option class="bg-dark text-white">{{ $single_patient->Gender }}</option>
                      <option value="Male">Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <input type="text" name="Address" value="{{ $single_patient->Address }}" class="form-control" placeholder="Address" id="Address">
                  </div>
                <div class="form-group col-md-12">
                  <label for="file">File</label>
                  <input type="text" name="file" value="{{ $single_patient->file }}" class="form-control" placeholder="file" id="file">
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
