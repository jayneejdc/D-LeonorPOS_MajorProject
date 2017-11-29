<!DOCTYPE html>
<html>
  <title>Walk-in Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link href="css/welcome.css" rel="stylesheet">
<body>
  <form action="insert.php" method="POSt">
    <div style="margin-left:12%; margin-top: -1%;">
      <div>
        <br><br>
        <center>
          <div class="ab col-2" style="width: 20%; margin-left: -8%;">
            <img src="Images/rides/wave1.png" class="ab-pic" style="width: 50%;">
            <h5>Wave Pool</h5>
            <p>Kids <input type="number" name="wpkid" id="input"></p>  
                <p>Adults <input type="number" name="wpadult" id="input"></p>
                <p>Discounted <input type="number" name="wpdisc" id="input"></p>
          </div><br>
          <div class="ab col-2" style="width: 20%; margin-left: -23%; margin-top: 22.5%;">
            <img src="Images/rides/giant.png" class="ab-pic" style="width: 50%;">
            <h5>Giant Slide</h5>
            <p>Kids <input type="number" name="gskid" id="input" min="0"></p>  
                <p>Adults <input type="number" name="gsadult" id="input" min="0"></p>
                <p>Discounted <input type="number" name="gsdisc" id="input" min="0"></p>
          </div>
        </center>
      </div>
      <div>
          <center>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.2%;">
              <img src="Images/rides/zip1.png" class="bo-pic" style="width: 50%;">
              <h5>Zipline</h5>
              <p>Kids <input type="number" name="zkid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="zadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="zdisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.2%;">
              <img src="Images/rides/cc1.png" class="bo-pic" style="width: 50%;">
              <h5>Cable Car</h5>
              <p>Kids <input type="number" name="cckid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="ccadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="ccdisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.2%;">
              <img src="Images/rides/atv4.png" class="bo-pic" style="width: 50%;">
              <h5>ATV Truck</h5>
              <p>Kids <input type="number" name="akid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="aadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="adisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -2.2%;">
              <img src="Images/rides/buggy1.png" class="bo-pic" style="width: 50%;">
              <h5>Buggy Kart</h5>
              <p>Kids <input type="number" name="bkkid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="bkadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="bkdisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -3.7%;">
              <img src="Images/rides/seg1.png" class="bo-pic" style="width: 50%;">
              <h5>Segway</h5>
              <p>Kids <input type="number" name="skid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="sadults" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="sdisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -3.7%;">
              <img src="Images/rides/bc.png" class="bo-pic" style="width: 50%;">
              <h5>Bump Car</h5>
              <p>Kids <input type="number" name="bckid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="bcadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="bcdisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -3.7%;">
              <img src="Images/rides/bb1.png" class="bo-pic" style="width: 50%;">
              <h5>Bumper Boat</h5>
              <p>Kids <input type="number" name="bbkid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="bbadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="bbdisc" id="input" min="0"></p>
            </div>
            <div class="bo col-4" style="width: 20%; margin-left:-1%; margin-top: -3.7%;">
              <img src="Images/rides/gk.png" class="bo-pic" style="width: 50%;">
              <h5>Go Kart</h5>
              <p>Kids <input type="number" name="gkkid" id="input" min="0"></p>  
                  <p>Adults <input type="number" name="gkadult" id="input" min="0"></p>
                  <p>Discounted <input type="number" name="gkdisc" id="input" min="0"></p>
            </div>
          </center>
        </div>
      </div>
    </form>
  </body>
</html>