@extends('layouts/admin')
@section('headText')
Student Registrassion
@endsection

@section('title')
Registrassion :: Student Management
@endsection

@section('content')

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Quick Example</h3>
	</div>

	@php
	use App\Models\Course;
	use App\Models\Branch;
	$courses = Course::all();
	$branches = Branch::all();
	@endphp

	<!-- /.card-header -->
	<!-- form start -->
	<form role="form" method="post" action="{{ route('uppStd') }}" enctype="multipart/form-data">
		{{ csrf_field() }} 	{{-- hidden token --}}
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		@foreach ($students as $student)
		{{-- expr --}}
		

		<div class="card-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Student Name</label>
				<input name="sName" type="text" class="form-control" placeholder="Enter Student's Name" value="{{ $student->studentName }}">
				<input name="sId" type="hidden" class="form-control" placeholder="Enter Student's Name" value="{{ $student->id }}">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Father Name</label>
				<input name="fName" type="text" class="form-control" placeholder="Enter Father's Name" value="{{ $student->fathertName }}">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Course</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Courses</label>
					</div>
					<select name="corId" class="custom-select" id="inputGroupSelect01">
						@foreach ($courses as $course)

						<option 

						@if ($student->corId == $course->corId)
						selected
						@endif

						value="{{ $course->corId }}">{{ "(". $course->corSortName.") ".$course->corFullName }}</option>
						@endforeach
					</select>
				</div>
				{{-- <input name="course" type="text" class="form-control" placeholder="Course"> --}}
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Branch</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Branches</label>
					</div>
					<select name="brId" class="custom-select" id="inputGroupSelect01">
						@foreach ($branches as $branch)

						<option

						@if ($student->brId == $branch->brId)
						selected
						@endif

						value="{{ $branch->brId }}">{{ $branch->brName }}</option>
						@endforeach
					</select>
				</div>
				{{-- <input name="branch" type="text" class="form-control" placeholder="Branch"> --}}
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Phone</label>
				<input name="phone" type="text" class="form-control" placeholder="Phone Number" value="{{ $student->phoneNumber }}">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $student->email }}">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Gender</label>
				{{-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn bg-olive">
						<input type="radio" name="gender" value="Male"> Male
					</label>
					<label class="btn bg-olive">
						<input type="radio" name="gender" value="Female"> Female
					</label>
				</div> --}}
				<input name="gender" type="text" class="form-control" placeholder="Gender" value="{{ $student->gender }}">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Date of birth</label>
				<input name="dob" type="date" class="form-control" placeholder="Date Of Birth" value="{{ $student->dateofb }}">
			</div>
			
			<div class="form-group">
				<label for="exampleInputFile">File input</label> <sup>{{ $student->profile_photo_path }}</sup>
				<div class="input-group">
					<div class="custom-file">
						<input name="exampleInputFile" type="file" class="custom-file-input" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Choose file</label>
					</div>
					<div class="input-group-append">
						<span class="input-group-text" id="">Upload</span>
					</div>
				</div>
			</div>
		</div>

		@endforeach
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Update Info</button>
		</div>
	</form>
</div>


@endsection