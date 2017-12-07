<?php
  session_start();
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'pos';
  $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
  // Escape email to protect against SQL injections
  $result = $mysqli->query("SELECT * FROM user");
  $email = $mysqli->escape_string($_POST['email']);
  $password = md5($_POST['password']);
  $active = "1";
  $firstname="";
  $lastname="";
  $num="";
  $temp="0";
  $type="master";
  while ($row = mysqli_fetch_array($result)) {
    if ($row[1]==$email) {
      if ($row[2]==$password) {
        if ($row[7]==$active) {
          if ($row[9]==$type) {
            header("location: admin(POS)/index.php");
            $temp="1";
            echo "hays";
          }else{
            $firstname=$row[4];
            $lastname=$row[3];
            $num = $row[1];
            $temp="1";
          }
        }
      }
    }
  }

  if ($temp=="0") {
    $_SESSION['message'] = "WRONG EMAIL OR PASSWORD PLEASE CONTACT THE ADMIN";
    header("location: error.php"); 
  }

  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  $_SESSION['num'] = $num;
  $num = $_SESSION['num'];
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
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