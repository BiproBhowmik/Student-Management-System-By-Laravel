@extends('layouts/admin')
@section('headText')
Student Details
@endsection

@section('title')
Student Details :: Student Management
@endsection

@section('content')

<div class="card">
	<!-- /.card-header -->
	<div class="card-body">
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
			<div class="row">
				<div class="col-sm-12">
					<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
						@php
						$i = 1;

						@endphp
						<thead>
							<tr role="row">
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SL</th>
								<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Student's Name</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Father's Name</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Course</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Branch</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Phone Number</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Email</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Gender</th>
								<th>Date of Birth</th>
								<th>Picture</th>
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
							@foreach ($students as $student)
							<tr role="row" class="odd">
								<td>{{ $i++ }}</td>
								<td>{{ $student->studentName }}</td>
								<td>{{ $student->fathertName }}</td>
								<td>{{ $student->corFullName }}</td>
								<td>{{ $student->brName }}</td>
								<td>{{ $student->phoneNumber }}</td>
								<td>{{ $student->email }}</td>
								<td>{{ $student->gender }}</td>
								<td>{{ $student->dateofb }}</td>
								<td class="text-center">
									<img src="{{ Storage::url($student->profile_photo_path) }}" width="50%">
									{{-- $student->profile_photo_path --}}

								</td>
								<td>
									<a class="right badge badge-warning" href="{{ route('editreg', $student->id) }}">Edit</a>
									<a class="right badge badge-danger" href="{{ route('delreg', $student->id) }}">Delete</a>
								</td>

							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection