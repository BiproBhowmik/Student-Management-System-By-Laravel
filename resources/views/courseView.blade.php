@extends('layouts/admin')

@section('headText')
All Courses
@endsection

@section('title')
Courses :: Student Management
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
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Full Course Name</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Short Course Name</th>
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
							@foreach ($courses as $course)
					<tr role="row" class="odd">
						<td>{{ $i++ }}</td>
						<td>{{ $course->corFullName }}</td>
						<td>{{ $course->corSortName }}</td>
						<td>
							<a class="right badge badge-warning" href="{{ route('editCourse', $course->corId) }}">Edit</a>
							<a class="right badge badge-danger" href="{{ route('delCourse', $course->corId) }}">Delete</a>
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