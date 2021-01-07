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

	<!-- /.card-header -->
	<!-- form start -->
	<form role="form" method="post" action="{{ route('storeStd') }}" enctype="multipart/form-data">
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
		<div class="card-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Student Name</label>
				<input name="sName" type="text" class="form-control" placeholder="Enter Student's Name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Father Name</label>
				<input name="fName" type="text" class="form-control" placeholder="Enter Father's Name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Course</label>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Courses</label>
					</div>
					<select id="for_branch" name="corId" class="custom-select" {{-- id="inputGroupSelect01" --}}>
						<option disabled selected>Choose Course Name...</option>
						@foreach ($courses as $course)
						<option id="courseId" value="{{ $course->corId }}">{{ "(". $course->corSortName.") ".$course->corFullName }}
						</option>
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
					<select name="brId" class="custom-select" id="branch_dropdown" {{-- id="inputGroupSelect01" --}}>
						{{-- <option selected>Choose...</option>
						@foreach ($branches as $branch)

						<option value="{{ $branch->brId }}">{{ $branch->brName }}</option>
						@endforeach --}}
					</select>
				</div>
				{{-- <input name="branch" type="text" class="form-control" placeholder="Branch"> --}}
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Phone</label>
				<input name="phone" type="text" class="form-control" placeholder="Phone Number">
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			</div>
			
			<div class="form-group">
				<label for="exampleInputPassword1">Gender</label>
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn bg-olive">
						<input type="radio" name="gender" value="Male"> Male
					</label>
					<label class="btn bg-olive">
						<input type="radio" name="gender" value="Female"> Female
					</label>
				</div>
				{{-- <input name="gender" type="text" class="form-control" placeholder="Gender"> --}}
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Date of birth</label>
				<input name="dob" type="date" class="form-control" placeholder="Date Of Birth">
			</div>
			
			<div class="form-group">
				<label for="exampleInputFile">File input</label>
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
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>


@endsection