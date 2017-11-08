<!DOCTYPE html>
<html>
<title>Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link href="css/menu.css" rel="stylesheet">
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%; margin-top: -1%;">
	<div>
    <div class="ba col-1">
      <img src="Images/shuttle.png" class ="ba-pic">
      <form>
        <h3>Entrance</h3>
        <h5>Kids <input type="number" name="kids" id="input" min="0"></h5>  
        <h5>Adults <input type="number" name="adults" id="input" min="0"></h5>
        <h5>Discounted <input type="number" name="discounted" id="input" min="0"></h5>
        <br>
      </form>
      <input type="submit" name="submit" id="btn">
    </div>
  </div>
</div>
<!-- Page Content -->
<div style="margin-left:25%">
	<?php include 'pool.html';?>
  <?php include 'rides.html';?>
</div>
</body>
</html>