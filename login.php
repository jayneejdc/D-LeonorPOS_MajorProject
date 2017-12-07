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
  $tuser="0";
  $tpass="0";
  $tactive="0";
  $type="master";
  while ($row = mysqli_fetch_array($result)) {
    if ($row[1]==$email) {
      $tuser="0";
      if ($row[2]==$password) {
        $tpass="0";
        if ($row[7]==$active) {
          if ($row[9]==$type) {
            header("location: admin/index.php");
            $temp="1";
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['num'] = $num;
            $num = $_SESSION['num'];
            $firstname = $_SESSION['firstname'];
            $lastname = $_SESSION['lastname'];
          }else{
            $firstname=$row[4];
            $lastname=$row[3];
            $num = $row[1];
            $temp="1";
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['num'] = $num;
            $num = $_SESSION['num'];
            $firstname = $_SESSION['firstname'];
            $lastname = $_SESSION['lastname'];
            header("location: welcome.php");
          }
        }else{
          $tactive="1";
        }
      }else{
        $tpass="1";
      }
    }else{
      $tuser="1";
    }
  }

  if ($tuser=="1") {
    $_SESSION['message'] = "The email you entered is incorrect";
    header("location: error.php"); 
  }
  if ($tpass=="1") {
    $_SESSION['message'] = "The password you entered doesnt match the email";
    header("location: error.php"); 
  }
  if ($tactive=="1") {
    $_SESSION['message'] = "The account is not active please coordinate with your adminstrator";
    header("location: error.php"); 
  }

  
?>
