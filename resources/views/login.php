<html>
	<head>
		<title>Login</title>
	</head>
	
	<body>
		<form action="/login" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token();?>" />
			<table>
				<tr>
					<td>Email Address</td>
					<td><input type="text" name="usr_email" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="usr_password" /></td>
				</tr>
				<tr>
					<td colspan='2' style="text-align:center;">
						<a href="/register">Register</a> or <input type="submit" value="Login" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>