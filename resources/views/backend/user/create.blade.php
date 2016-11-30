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
			<div class="col-xs-10">
				<h1>New User</h1>

				<form action="{{ route('backend.user.store') }}" method="POST">
					{!! csrf_field() !!}
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" required name="username" value="{{ old('username') }}">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" required name="email" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" required name="password">
					</div>
					<div class="form-group">
						<label for="">Password Confirmed</label>
						<input type="password" class="form-control" name="password_comfirmation">
					</div>
					<div class="form-group">
						<label for="">Is Admin</label>
						<input type="checkbox" name="is_admin">
					</div>
					<div class="form-group">
						<label for=""></label>
						<button type="submit" class="btn btn-primary" name="submit">Create</button>
						<button type="reset" class="btn btn-default" name="reset">Reset</button>
						<button type="reset" class="btn btn-default" name="reset"><a href="{{ route('backend.user.index') }}" title="New User">Back</a></button>

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
