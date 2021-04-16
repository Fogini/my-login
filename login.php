<!Doctype html>
<html>
<head>
	<title>My Login</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<div class="form">
	<form action="verify.php" method="post" autocomplete="off">
		<p>
		<label>Username:</label><br />
		<input type="text" name="username" id="user"/>
		</p>
		<p>
		<label>Password:</label><br />
		<input type="password" name="password" id="password"/>
		</p>
		<p>
		<input type="submit" class="button" value="Login" />
		</p>
	</form>
</div>
</body>
</html>
