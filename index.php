<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pos';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up/Login Form</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    if (isset($_POST['login'])) { //user logging in
	        require 'login.php';        
	    }elseif (isset($_POST['register'])) { //user registering   
        	require 'register.php';
    	}
	}
?>

<body>
  	<div class="form">
    	<ul class="tab-group">
      		<li class="tab active"><a href="#login">Log In</a></li>
        	<li class="tab"><a href="#signup">Sign Up</a></li>
      	</ul>
      	<div class="tab-content">
        	<div id="login">   
        		<h1>Welcome Back!</h1>
        		<form action="index.php" method="post" autocomplete="off">
            		<div class="field-wrap">
            			<label>
            				Email Address<span class="req">*</span>
            			</label>
            			<input type="email" required autocomplete="off" name="email"/>
          			</div>
          			<div class="field-wrap">
            			<label>
              				Password<span class="req">*</span>
            			</label>
            			<input type="password" required autocomplete="off" name="password"/>
  	        		</div>
     	     		<p class="forgot"><a href="forgot.html">Forgot Password?</a></p>
          			<button class="button button-block" name="login" />Log In</button>
          		</form>
        	</div>
        	<div id="signup">   
        		<h1>Sign Up for Free</h1>
        		<form action="index.php" method="post" autocomplete="off">
        			<div class="top-row">
            			<div class="field-wrap">
            				<label>
            	    			First Name<span class="req">*</span>
            	  			</label>
            	  			<input type="text" required autocomplete="off" name='firstname' />
           		 		</div>
            			<div class="field-wrap">
            	  			<label>
            	    			Last Name<span class="req">*</span>
            	  			</label>
            	  			<input type="text"required autocomplete="off" name='lastname' />
            			</div>
        			</div>
          			<div class="field-wrap">
            			<label>
              				Email Address<span class="req">*</span>
            			</label>
            			<input type="email"required autocomplete="off" name='email' />
          			</div>
          			<div class="field-wrap">
            			<label>
            	  			Set A Password<span class="req">*</span>
            			</label>
            			<input type="password"required autocomplete="off" name='password'/>
          			</div>
          			<button type="submit" class="button button-block" name="register" />Register</button>
          		</form>
        	</div>  
    	</div><!-- tab-content -->
	</div> <!-- /form -->
	<script src="js/jquery.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>