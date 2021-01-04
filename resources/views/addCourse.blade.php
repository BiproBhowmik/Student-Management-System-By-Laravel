@extends('layouts/admin')
@section('headText')
Add Courses
@endsection

@section('title')
Add Course :: Student Management
@endsection

@section('content')

	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{ route('addCor') }}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Full Name</label>
                    <input name="corFullN" type="text" class="form-control" placeholder="Enter Course Full Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Course Short Form</label>
                    <input name="corShortN" type="text" class="form-control" placeholder="Enter Course Short Form">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Course</button>
                </div>
              </form>
            </div>


@endsection