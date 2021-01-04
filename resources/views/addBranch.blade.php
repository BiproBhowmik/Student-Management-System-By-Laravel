@extends('layouts/admin')
@section('headText')
Add Branch
@endsection

@section('title')
Add Branch :: Student Management
@endsection

@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" method="post" action="{{ route('addBr') }}">
   @csrf 
   <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Course Name</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Courses</label>
        </div>

        @php
          use App\Models\Course;
          $courses = Course::all();
        @endphp

        <select name="corId" class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          @foreach ($courses as $course)

          <option value="{{ $course->corId }}">{{ "(". $course->corSortName.") ".$course->corFullName }}</option>
        @endforeach
        </select>

      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Branch Name</label>
      <input name="brName" type="text" class="form-control" placeholder="Enter Branch Name">
    </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Add Branch</button>
  </div>
</form>
</div>


@endsection