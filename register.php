<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Registration</title>
		<link rel="stylesheet" type = "text/css" href="styles/stylereg.css">
		<link rel="shortcut icon" href="ikon.ico" type="image/x-icon" />
	</head>
	<body>

		<div class ="signIn">
			<div class = "column">
				<h1>Register</h1>
					<form action="signup.php" method = "POST">
						<input autocomplete = "off" type = "text" name = "username" placeholder = "Enter Username" required />
						<br><br>
						<input autocomplete = "off" type = "email" name = "email"  placeholder = "Enter E-mail" required />
						<br><br>
						<input autocomplete = "off"  type = "password" name = "password" placeholder = "Enter password" required />
						<br><br>
						<input autocomplete = "off"  type = "password" name = "password_confirm" placeholder = "Confirm password" required /> 
						<br><br>
						<input type = "submit" value = "Register" />
						<br><br>
					</form>
			</div>
		</div>
	</body>
</html>
