
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "pos");
$query = "SELECT * FROM yearly";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Del Leonor Hotel | Admin</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="morris.css">
    <link rel="stylesheet" href="Styles/welcom.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>

</head>
<div style="float: right; margin-top: 4%;">
  <button onclick="myFunction()" style=" margin-top: 1%; width: 40%;" class="button"><img src="Images/print.png" alt="Print" style="width: 80%;"></button>
 </div>
<body>
  <h3 class="text-primary text-center"  style="margin-top: 7%; margin-left: 20%;">
    D Leonor Daily Revenue
  </h3>
  <h5 class="text-primary text-center" style=" margin-left: 20%;">(November 1-7 2017)</h5>
  <div class"row" style="width: 55%; margin-left: 25%;">
    <br><br>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" style="margin-left: 23%;">
                <div class="col-sm-10 col-md-12 well" id="content">
                    <div class="col-sm-7  text-center">
                   <label class="label label-success"></label>
                  <div id="bar-chart" ></div>
                </div>
            </div>
          </div>
        </div>
    
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" style="margin-left: 23%;">
                <div class="col-sm-10 col-md-12 well" id="content">
                    <div class="col-sm-7  text-center">
                   <label class="label label-success"></label>
                  <div id="pie-chart" ></div>
                </div>
            </div>
          </div>
        </div>
    
  </div>
</body>
<style>
  #bar-chart{
    width: 500px;
    margin-top: -3%;
  }
  #pie-chart{
    min-height: 270px;
     margin-top: 2%;
  }
</style>
<script>
function myFunction() {
    window.print();
}
</script>
<script>
    config = {
      data: [<?php echo $chart_data; ?>],
      xkey: 'year',
      ykeys: ['profit', 'purchase', 'sale'],
      labels: ['Entrance', 'Pool', 'Rides'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };


config.element = 'bar-chart';
Morris.Bar(config);
Morris.Donut({
  element: 'pie-chart',
  data: [
    {label: "Entrance", value: 45},
    {label: "Pool", value: 25},
    {label: "Rides", value: 30},
    
  ]
});
</script>
</html>
<?php include 'sidebar.php';?>