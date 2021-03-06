@extends('Dashboard.Home.app')

@section('title')
allroom
@endsection

@section('content')
<div class="container mt-0"style="padding:0px">
  <div class="row breadcrumb-bar">
    <div class="col-md-6">
      <h3 class="block-title">ALL ROOM</h3>
    </div>
    <div class="col-md-6">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">
            <span class="ti-home"></span>
          </a>
        </li>
        <li class="breadcrumb-item">ALL RoomAllotment</li>
        <li class="breadcrumb-item active">All Room</li>
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
      <h3 class="widget-title">RoomAllotment List</h3>
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
              <div class="container"style="padding:0px">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <table class="table">
                    <thead>
                      <tr>


                        <th scope="col">ID</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Appointment Date</th>

                        <th scope="col">Token Number </th>

                        <th scope="col">Problem</th>





                      </tr>
                    </thead>
                    <tbody>

                      @foreach($room_allotments as $room_allotment)
                      <tr>
                      <th scope="row">{{$room_allotment->id }}</th>
                        <td>{{ $room_allotment->room_number }}</td>
                        <td>{{ $room_allotment->room_type }}</td>


                 <td>{{ $room_allotment->relationBetweenPatient->Patient_Name }}</td>

                <td>{{ $room_allotment->relationBetweenDoctor->doctor_name }}</td>

                        <td>{{ $room_allotment->patient_id }}</td>

                        <td>{{ $room_allotment->doctor_id}}</td>
                        <td>{{ $room_allotment->allot_date }}</td>
                        <td>{{ $room_allotment->discharge_date}}</td>



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
