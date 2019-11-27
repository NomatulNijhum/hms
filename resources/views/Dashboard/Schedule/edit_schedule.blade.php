@extends('Dashboard.Home.app')

@section('title')
Edit  Schedule
@endsection

@section('content')
<!-- /Menu -->
      <!-- Breadcrumb -->
      <!-- Page Title -->
      <div class="container mt-0">
        <div class="row breadcrumb-bar">
          <div class="col-md-6">
            <h3 class="block-title">EditSchedule</h3>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">
                  <span class="ti-home"></span>
                </a>
              </li>
              <li class="breadcrumb-item">Schedules</li>
              <li class="breadcrumb-item active">Edit Schedule</li>
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
            <h3 class="widget-title">Edit Schedule</h3>

            <form id="schedulecreate" action="{{route ('schedule_create')}}" method="post" enctype="multipart/form-data">
              @csrf


              <div class="form-group col-md-6">
                  <label>Doctor Name</label>
                  <select name="doctor_id" class="form-control">
                      @foreach($doctors as $doctor)
                          <option value="{{$doctor->id }}">{{ $doctor->doctor_name}}</option>
                      @endforeach


                  </select>
              </div>










                <div class="form-group col-md-6">
                  <label for="available_days">Available Days</label>
                  <select class="form-control" name="available_days"value="{{ $single_schedule->available_days}}" id="available_days">
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>

               </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="available_dates">Available Date</label>
                  <input type="date" name="available_dates"value="{{ $single_schedule->available_dates}}"  placeholder="available_dates" class="form-control" id="available_dates">
                </div>

                                <div class="form-group col-md-6">
                                  <label for="available_times">Start Time</label>
                                  <input type="time" name="available_times" value="{{ $single_schedule->available_times}}"placeholder="available_times" class="form-control" id="available_times">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="available_time">End Time</label>
                                  <input type="time" name="available_time"value="{{ $single_schedule->available_time}}" placeholder="available_time" class="form-control" id="available_time">
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
