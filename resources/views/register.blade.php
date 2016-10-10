<html>
	<head>
		<title>Register</title>
	</head>
	
	<body>
	
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<form action="/createuser" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>" />
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="usr_fname" /></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="usr_lname" /></td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td><input type="text" name="usr_email" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="usr_password" /></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="text" name="confirm_pass" /></td>
				</tr>
				<tr>
					<td colspan='2' >
						<input type="submit" value="Create User" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>