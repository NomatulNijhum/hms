@extends('Dashboard.Home.app')

@section('title')
Add RoomAllocation
@endsection

@section('content')



<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0"style="padding:0px">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">Add Room Allotment</h3>
          </div>
          <div class="col-md-6"style="padding:0px">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Room Allotments</li>
              <li class="breadcrumb-item active">Add Room Allotment</li>
            </ol>
          </div>
        </div>
      </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container"style="padding:0px">

      <div class="row">
        <!-- Widget Item -->
        <div class="col-md-12">
          <div class="widget-area-2 proclinic-box-shadow">
            <h3 class="widget-title">Add Room Allotment</h3>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="room_number">Room Number</label>
                  <input type="text" name="room_number"class="form-control" placeholder="room_number" id="room_number">
                </div>
                <div class="form-group col-md-6">
                  <label for="room_type">Room Type</label>
                  <select class="form-control" name="room_type"id="room-type">
                    <option>ICU</option>
                    <option>General</option>
                    <option>AC Room</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="patient-name">Patient Name</label>
                  <input type="text" placeholder="Patient Name" class="form-control" id="patient-name">
                </div>
                <div class="form-group col-md-6">
                  <label for="allot_date">Allotment Date</label>
                  <input type="date" name="allot_date"placeholder="allot_date" class="form-control" id="allot_date">
                </div>
                <div class="form-group col-md-6">
                  <label for="discharge-date">Discharge Date</label>
                  <input type="date" name="Patient_Name"placeholder="Discharge Date" class="form-control" id="discharge-date">
                </div>
                <div class="form-group col-md-6">
                  <label for="doctor-name">Doctor Name</label>
                  <input type="text" placeholder="Doctor Name" class="form-control" id="doctor-name">
                </div>

                <div class="form-check col-md-12 mb-2">
                  <div class="text-left">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="ex-check-2">
                      <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6 mb-3">
                  <button type="submit" class="btn btn-primary btn-lg">Allot Room</button>
                </div>
              </div>
            </form>
            <!-- Alerts-->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Successfully Done!</strong> Please check in Allotment list
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
    <!-- /Main Content -->





@endsection
