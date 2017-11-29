<?php
  session_start();
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'pos';
  $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
  // Escape email to protect against SQL injections
  $result = $mysqli->query("SELECT * FROM users");
  $num = $mysqli->escape_string($_POST['num']);
  $password = md5($_POST['password']);
  $active = "0";
  $firstname="";
  $lastname="";
  while ($row = mysqli_fetch_array($result)) {
    if ($row[0]==$num) {
      if ($row[3]==$password) {
        if ($row[4]==$active) {
          $firstname=$row[1];
          $lastname=$row[2];
        }
      }
    }
  }
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
      Welcome <?php echo $firstname ." ". $lastname; ?>
    </div>
  </div>
  <br><br>

  <div style="margin-left: 20%; margin-top: 5%;">
    <div class="container">
      <div class="entrance">
        <br>
        <center><img src="Images/entrance.png" alt="Avatar" class="image"></center>
        <div class="middle">
          <center><a href="menu.php"><input type="submit" name="submit" value="Entrance"></a></center>
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
          <center><a href="walkin.php"><input type="submit" name="submit"  value="Walk in"></a></center>
        </div>
        <h3><center>Walk-in</center></h3>
        <br>
      </div>
    </div>
  </div>
  
</body>
</html>