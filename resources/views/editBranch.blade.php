@extends('layouts/admin')
@section('headText')
Edit Branch
@endsection

@section('title')
Edit Branch :: Student Management
@endsection

@section('content')

<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>

          @php
          use App\Models\Course;
          $courses = Course::all();
          $branch;
          foreach ($branches as $bra) {
            $branch = $bra; //for select branch course
          }
          @endphp
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{ route('uppBr') }}">
           @csrf 
           <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Course Name</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Courses</label>
                </div>

                

                <select name="corId" class="custom-select" id="inputGroupSelect01">
                  @foreach ($courses as $course)

                  <option

                  @if ($course->corId == $branch->corId)
                  selected
                  @endif

                  value="{{ $course->corId }}">{{ "(". $course->corSortName.") ".$course->corFullName }}</option>
                  @endforeach
                </select>

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Branch Name</label>
                <input name="brName" type="text" class="form-control" placeholder="Enter Branch Name" value="{{ $branch->brName }}">
                <input name="brId" type="hidden" class="form-control" placeholder="Enter Branch Name" value="{{ $branch->brId }}">
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update Branch</button>
            </div>
          </form>
        </div>


        @endsection