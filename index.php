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
</head>
<body>
	<div style="margin-top: 2%;">
		<h2><center>D'Leonor Inland Resort</center></h2>
	</div>
    <div class="login">
    	<br><br>
    	<h3>Log In</h3>
    	<br><br>
		<form class="form" action="welcome.php" method="post">
			<label>Employee ID: <br><br><input type="text" name="num"></label><br><br>
			<label>Password: <br><br><input type="password" name="password"></label><br><br><br>
			<input type="submit" name="submit">
		</form>
	</div>
</body>