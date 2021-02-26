<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/login" method="POST">
		@csrf
		<label>Email Address:</label>
		<input type="email" name="email">
		<label>Password:</label>
		<input type="password" name="password">
		<input type="submit" name="submit">
	</form>
</body>
</html>