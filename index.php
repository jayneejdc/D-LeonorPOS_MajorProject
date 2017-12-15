<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pos';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
	session_start();

?>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/welcome.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class = "dleonor">
		<h2><center>D'Leonor Inland Resort</center></h2>
	</div>
	<img src="Images/logoo.png" style="width: 30%; margin-left: 10%; margin-top: -1%;">
    <div class="login">
    	<br><br>
    	<h3>Log In</h3>
    	<br><br>
		<form class="form" action="login.php" method="post">
			<label>Employee Email: <br><br><input type="text" name="email"></label><br><br>
			<label>Password: <br><br><input type="password" name="password"></label><br><br><br>
			<a href="forgot.php">Forgot Passowrd?</a><br><br>
			<input type="submit" name="submit" value="Login">
			<input type="hidden" name="temp" value="0">
		</form>
	</div>
</body>