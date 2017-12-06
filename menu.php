<?php include 'header.html' ?>
<?php
session_start();
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $num = $_SESSION['num'];
  $_SESSION['num'] = $num;
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
?>

<!DOCTYPE html>
<html>
  <title>Entrance Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/welcome.css" rel="stylesheet">
<body>
<form action="insert.php" method="POSt">
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:18%; margin-top: 3%;">
	<div>
    <div class="ba col-1" style="width: 90%;">
      <img src="Images/entrance.png" class ="ba-pic" style="width: 70%;">
      <br><br>
        <h3><center>Entrance</center></h3><br>
        <h5>Kids <input min="0" type="number" style="width: 50%;" name="ekid" id="input" min="0"></h5>  
        <h5>Adults <input min="0" type="number" style="width: 50%;" name="eadult" id="input" min="0"></h5>
        <h5>Discount<input min="0" type="number" style="width: 50%;" name="edisc" id="input" min="0"></h5>
        <br><br>
      <button min="0" type="submit" name="submit" style="float: left; margin-left: 35%; margin-top: -4.5%; width: 50%;" class="button">Submit</button>
    </div>
  </div>
</div>
<!-- Page Content -->
<div style="margin-left:25%">
  <div>
    <br><br>
    <center>
      <div class="ab col-2" style="width: 20%; margin-left: -8%; margin-top: 31%;">
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
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/seg1.png" class="bo-pic" style="width: 50%;">
          <h5>Segway</h5>
          <p>Kids <input min="0" type="number" name="skid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="sadults" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="sdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/bc.png" class="bo-pic" style="width: 50%;">
          <h5>Bump Car</h5>
          <p>Kids <input min="0" type="number" name="bckid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="bcadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="bcdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/bb1.png" class="bo-pic" style="width: 50%;">
          <h5>Bumper Boat</h5>
          <p>Kids <input min="0" type="number" name="bbkid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="bbadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="bbdisc" id="input" min="0"></p>
        </div>
        <div class="bo col-4" style="width: 20%; margin-left:-1%;">
          <img src="Images/rides/gk.png" class="bo-pic" style="width: 50%;">
          <h5>Go Kart</h5>
          <p>Kids <input min="0" type="number" name="gkkid" id="input" min="0"></p>  
              <p>Adults <input min="0" type="number" name="gkadult" id="input" min="0"></p>
              <p>Discounted <input min="0" type="number" name="gkdisc" id="input" min="0"></p>
        </div>
      </center>
    </div>
  </div>
</div>
</form>
</body>
</html>