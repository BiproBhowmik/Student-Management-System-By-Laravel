@extends('layouts/admin')

@section('headText')
All Branches
@endsection

@section('title')
Branches :: Student Management
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
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Course Name</th>
								<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Branch Name</th>
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
							@foreach ($branches as $branch)
					<tr role="row" class="odd">
						<td>{{ $i++ }}</td>
						<td>{{ $branch->corFullName .' ( '.$branch->corSortName.' )' }}</td>
						<td>{{ $branch->brName }}</td>
						<td>
							<a class="right badge badge-warning" href="{{ route('editBranch', $branch->brId) }}">Edit</a>
							<a class="right badge badge-danger" href="{{ route('delBranch', $branch->brId) }}">Delete</a>
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