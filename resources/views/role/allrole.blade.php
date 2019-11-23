@extends('layouts.app')



@section('title')
allrole
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>

        </tr>
      </thead>
      <tbody>

        @foreach($roles  as $role)
        <tr>
          <th scope="row">{{ $role->id }}</th>
          <td>{{ $role->role_name }}</td>

        </tr>
        @endforeach




      </tbody>
      </table>

    </div>

  </div>

</div>
@endsection
