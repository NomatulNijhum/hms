@extends('Dashboard.Home.app')

@section('title')
Add Operation Report
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title"> Operation Report</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Operation Report</li>
              <li class="breadcrumb-item active">Add Operation Report</li>
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
            <h3 class="widget-title">Add Operation  Report</h3>
            <form id="Operationreport_create" action="{{route ('Operationreport_create')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="patient_id">Patient ID</label>
                  <input type="text" name="patient_id" class="form-control" placeholder="patient_id" id="patient_id">
                </div>
                <div class="form-group col-md-6">
                  <label for="dob">Date </label>
                  <input type="date" name="date" placeholder="date" class="form-control" id="dob">
                </div>
                <div class="form-group col-md-6">
                  <label for="age">Title</label>
                  <input type="text" name="title" placeholder="title" class="form-control" id="title">
                </div>
                <div class="form-group col-md-6">
                  <label for="description">Description</label>
                  <input type="text" name="description" placeholder="description" class="form-control" id="description">
                </div>
                <div class="form-group col-md-6">
                  <label for="doctor_name">Doctor Name</label>
                  <input type="text" name="doctor_name" placeholder="doctor_name" class="form-control" id="doctor_name">
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
