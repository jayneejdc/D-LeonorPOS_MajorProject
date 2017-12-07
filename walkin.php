<?php include 'header.html' ?>
<?php
  session_start();
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'pos';
  $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $num = $_SESSION['num'];
  $_SESSION['num'] = $num;
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
?>
<!DOCTYPE html>
<html>
<title>Walk-in Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/welcome.css" rel="stylesheet">
<body>
<form action="winsert.php" method="POSt">
<!-- Page Content -->
<div style="margin-left:10%">
  <div>
    <input min="0" type="hidden" name="ekid" value="0">
    <input min="0" type="hidden" name="eadult" value="0">
    <input min="0" type="hidden" name="edisc" value="0">
    <br><br>
    <center>
      <div class="ab col-2" style="width: 20%; margin-left: -8%; margin-top: 26%;">
        <img src="Images/rides/wave1.png" class="ab-pic" style="width: 50%;">
        <h5>Wave Pool</h5>
        <p>Kids <input min="0" type="number" name="wpkid" id="input"></p>  
            <p>Adults <input min="0" type="number" name="wpadult" id="input"></p>
            <p>Discounted <input min="0" type="number" name="wpdisc" id="input"></p>
      </div><br><br>
      <div class="ab col-2" style="width: 20%; margin-left: -23%; ">
        <img src="Images/rides/giant.png" class="ab-pic" style="width: 50%;">
        <h5>Giant Slide</h5>
        <p>Kids <input min="0" type="number" name="gskid" id="input" min="0"></p>  
            <p>Adults <input min="0" type="number" name="gsadult" id="input" min="0"></p>
            <p>Discounted <input min="0" type="number" name="gsdisc" id="input" min="0"></p>
      </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/zip1.png" class="bo-pic" style="width: 50%;">
          <h5>Zipline</h5>
          <p>Kids <input min="0" type="number" name="zkid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="zadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="zdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%; ;">
          <img src="Images/rides/cc1.png" class="bo-pic" style="width: 50%;">
          <h5>Cable Car</h5>
          <p>Kids <input min="0" type="number" name="cckid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="ccadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="ccdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/atv4.png" class="bo-pic" style="width: 50%;">
          <h5>ATV Truck</h5>
          <p>Kids <input min="0" type="number" name="akid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="aadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="adisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/buggy1.png" class="bo-pic" style="width: 50%;">
          <h5>Buggy Kart</h5>
          <p>Kids <input min="0" type="number" name="bkkid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="bkadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="bkdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.5%;">
          <img src="Images/rides/seg1.png" class="bo-pic" style="width: 50%;">
          <h5>Segway</h5>
          <p>Kids <input min="0" type="number" name="skid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="sadults" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="sdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.5%;">
          <img src="Images/rides/bc.png" class="bo-pic" style="width: 50%;">
          <h5>Bump Car</h5>
          <p>Kids <input min="0" type="number" name="bckid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="bcadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="bcdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.5%;">
          <img src="Images/rides/bb1.png" class="bo-pic" style="width: 50%;">
          <h5>Bumper Boat</h5>
          <p>Kids <input min="0" type="number" name="bbkid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="bbadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="bbdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.5%;">
          <img src="Images/rides/gk.png" class="bo-pic" style="width: 50%;">
          <h5>Go Kart</h5>
          <p>Kids <input min="0" type="number" name="gkkid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="gkadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="gkdisc" id="input" min="0"></p>
        </div>
      </center>
      <button min="0" type="submit" name="submit" style="float: left; margin-left: 35%; margin-top: -4.5%; width: 10%;" class="button">Submit</button>
    </div>
  </div>
</div>
</form>
</body>
</html>