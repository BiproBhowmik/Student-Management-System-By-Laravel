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
		<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
			<table class="table table-bordered table-striped dataTable">
				@php
				$i = 1;

				@endphp
				
				<tr role="row" class="odd">
					<th >SL</th>
					<th >Student's Name</th>
					<th >Father's Name</th>
					<th >Course</th>
					<th >Branch</th>
					<th >Phone Number</th>
					<th >Email</th>
					<th >Gender</th>
					<th >Date of Birth</th>
					<th >Picture</th>
					<th >Actions</th>
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

				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
					<ul class="pagination">
						<li class="paginate_button page-item previous disabled" id="example1_previous">
							<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
						</li>
						<li class="paginate_button page-item active">
							<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
							<li class="paginate_button page-item ">
								<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
							</li>
							<li class="paginate_button page-item ">
								<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
							</li>
							<li class="paginate_button page-item ">
								<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
							</li>
							<li class="paginate_button page-item ">
								<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
							</li>
							<li class="paginate_button page-item ">
								<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
							</li>
							<li class="paginate_button page-item next" id="example1_next">
								<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.card-body -->
</div>

@endsection