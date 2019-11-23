@extends('layouts.app')


@section('title')
add role
@endsection

@section('content')


<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('role_create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role Name</label>
                        <input type="text" class="form-control"  placeholder="Role Name" name="role_Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
