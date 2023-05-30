<!DOCTYPE html>
<html>
<head>
	<title>Administrator Login</title>
	<style>
		body {
			background-color: #36a0be;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			font-size: 36px;
			color: #333;
		}
		form {
			margin: 50px auto;
			padding: 20px;
			max-width: 400px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #333;
			font-weight: bold;
		}
		input[type="text"],
		input[type="password"] {
			display: block;
			width: 95%;
			padding: 10px 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 20px;
			font-size: 16px;
			color: #333;
		}
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			padding: 10px 20px 10px;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #555;
		}
		.heading {
            background-color: #333;
            color: #fff;
            font-size: 30px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

	</style>
</head>
<body>
<div class="heading">
       Administrator Login
    </div>
	<form action="admin_login_validate.php" method='POST'>
		<label for="user-id">User ID:</label>
		<input type="text" id="user-id" name="user-id" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="admin-password" required>
		<input type="submit" value="Login">

		
	</form>
</body>
</html>
