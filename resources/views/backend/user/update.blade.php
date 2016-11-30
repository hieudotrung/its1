<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Edit User</h1>
				
				<a href="{{ route('backend.user.index') }}" title="New User">Cancel</a>
				
				<form action="{{ route('backend.user.update', $user->id) }}" method="POST">
					{!! csrf_field() !!}
					{!! method_field('put') !!}
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="username" value="{{ $user['username'] }}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email" value="{{ $user['email'] }}">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="form-group">
						<label for="">Password Confirmed</label>
						<input type="password" class="form-control" name="password_comfirmation">
					</div>
					<div class="form-group">
						<label for="">Is Admin</label>
						<input type="checkbox" name="is_admin" value="0" checked="{!! ($user['is_admin']===1)?'checked':''!!}">
					</div>
					<div class="form-group">
						<label for=""></label>
						<button type="submit" class="btn btn-primary" name="submit">Update</button>
						<button type="reset" class="btn btn-default" name="reset">Reset</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
		
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
