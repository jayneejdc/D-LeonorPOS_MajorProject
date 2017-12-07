<?php
session_start();
$num = $_SESSION['num'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['num'] = $num;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
  <div class="w3-sidebar w3-light-grey w3-bar-block"> <!-- line 56-->
    <div class="welcome">
      <center>Welcome <?php echo $firstname ." ". $lastname; ?></center>
      <label style="float: right; margin-top: -3%;"><a href="logout.php">Logout</a></label>
    </div>
  </div>
  <br><br>
  <form action="walkin.php" method="POST">
    <input type="hidden" name="firstname" value="<?php echo($firstname);?>">
    <input type="hidden" name="lastname" value="<?php echo $lastname ; ?>">
  </form>

  <div style="margin-left: 20%; margin-top: 5%;">
    <div class="container">
      <div class="entrance">
        <br>
        <center><img src="Images/entrance.png" alt="Avatar" class="image"></center>
        <div class="middle">
         <center><button style="float: left; margin-left: 35%; margin-top: -4.5%; width: 100%;" class="button"> <a href="menu.php">Entrance</a></button></center>
        </div>
        <h3><center>Entrance</center></h3>
        <br>
      </div>
    </div>

    <div class="container">
      <div class="walk">
        <br>
        <center><img src="Images/walk.png" class="image" ></center> 
        <div class="middle">
          <center><button style="float: left; margin-left: 35%; margin-top: -4.5%; width: 100%;" class="button"> <a href="walkin.php">Walk-in</a></button></center>
        </div>
        <h3><center>Walk-in</center></h3>
        <br>
      </div>
    </div>
  </div>
</body>
</html>