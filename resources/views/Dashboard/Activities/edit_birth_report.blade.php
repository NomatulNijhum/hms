@extends('Dashboard.Home.app')

@section('title')
Edit  Birth Report
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title"> Edit Birth Report</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Birth Report</li>
              <li class="breadcrumb-item active">Edit Birth Report</li>
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
            <h3 class="widget-title">Edit Birth Report</h3>

            <form id="Birthreport_create" action="{{route ('Birthreport_create')}}" method="post" enctype="multipart/form-data">
              @csrf


              <div class="form-group col-md-6">
              <label>Patient Name</label>
                <select name="patient_id" class="form-control">
               @foreach($patients as $patient)
        <option value="{{ $patient->id }}">{{ $patient->Patient_Name}}</option>
               @endforeach
                    </select>
                    </div>
                <div class="form-group col-md-6">
                  <label for="dob">Date </label>
                  <input type="date" name="date" value="{{ $single_birthreport->date }}"  placeholder="date" class="form-control" id="dob">
                </div>
                <div class="form-group col-md-6">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="{{ $single_birthreport->title }}" placeholder="title" class="form-control" id="title">
                </div>
                <div class="form-group col-md-6">
                  <label for="description">Description</label>
                  <input type="text" name="description" value="{{ $single_birthreport->description }}" placeholder="description" class="form-control" id="description">
                </div>
                <div class="form-group col-md-6">
                  <label for="doctor_name">Doctor Name</label>
                  <input type="text" name="doctor_name" value="{{ $single_birthreport->doctor_name }}"  placeholder="doctor_name" class="form-control" id="doctor_name">
                </div>



                <div class="form-group col-md-6 mb-3">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>
            <!-- Alerts-->

            <!-- /Alerts-->
          </div>
        </div>
        <!-- /Widget Item -->
      </div>
    </div>

@endsection
