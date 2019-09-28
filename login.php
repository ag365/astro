<!DOCTYPE html>
<html lang="el" dir="ltr">
<head>
	  background-image: : white;
<title>Astro | Login</title>
<link rel="icon" href="logo.jpg">
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<link rel="icon" href="logo.jpg">
</head>
<body>

<?php
$db_hostname = 'localhost';
$db_database = 'login';
$db_username = 'root';
$db_password = '';

?>

<form action="account.php" method= "POST">
		<div id="frm">
		<form action="process.php" method= "POST">

			<p>

				<label>Username:</label>
				<input type="text" id= "user" name ="user" />

			</p>

			<p>

				<label>Password:</label>
				<input type="password" id= "pass" name ="pass" />

			</p>

						<p>


				<input type="submit" id= "btn" value ="Login" />

			</p>

		</form>
		</div>
	</form>



</body>

</html>
