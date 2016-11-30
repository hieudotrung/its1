@extends('layout.index_backend')

@section('noidung')
	<div class="container">
		<div class="row">
			<div class="col-xs-10">
				<h1>User List</h1>

				<a href="{{ route('backend.user.create') }}" title="New User" class="btn btn-primary pull-right" style="margin-bottom: 10px">Add New User</a>

				<table class="table table-hover table-bordered table-responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Email</th>
							<th>Is Admin</th>
							<th>Created At</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>

					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->username }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->is_admin ? 'yes' : 'no'}}</td>
								<td>{{ $user->created_at }}</td>
								<td><a href="{!! route('backend.user.edit', $user->id) !!}">Sua</a></td>
								
								<td><a href="{{ route('backend.user.destroy', $user->id) }}" onclick="window.confirm('Ban co muon xoa khong');">Xoa</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<div class="text-right">
					{{ $users->links() }}
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
