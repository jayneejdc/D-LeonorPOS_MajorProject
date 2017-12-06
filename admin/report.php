
<br><br>
<?php $db= new mysqli('localhost','root','','pos'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DASHBOARD | Admin</title>
  <link rel="stylesheet" href="Styles/bootstrap.min.css">
  <link rel="stylesheet" href="Styles/style.css">
  <link rel="stylesheet" href="Styles/admin.css">
  <link rel="stylesheet" href="Styles/welcom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.ui.js"></script>
</head>
<div style="float: right; margin-top: 2%;">
  <button onclick="myFunction()" style=" margin-top: 1%; width: 40%;" class="button"><img src="Images/print.png" alt="Print" style="width: 80%;"></button>
 </div>
<style>
 
table caption {
  padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    border-bottom: 1px solid #ddd;
  }
}

</style>
               
 <br />
<div class="container" style="margin-top: 4%; margin-left: 19%; width: 80%;">
  <div class="panel panel-default">
    <div class="panel-heading">Report</div>
    <div class="panel-body">
  <div class="row">
    <div class="col-xs-12">
    <div id="user">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
             
              <th><center>Invoice No.</center></th>
              <th><center>Username</center></th>
              <th><center>Entrance</center></th>
              <th><center>Pool</center></th>
              <th><center>Rides</center></th>
              <th><center>Total Amount</center></th>
              <th><center>Date</center></th>

            </tr>
          </thead>
          <tbody>
            <?php $sql=$db->query("Select * from revenue ORDER BY transacid desc");
            foreach ($sql as $key => $user) :
              ?>
           <tr>

                <td><?php echo $user['transacid'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['entrance']; ?></td> 
                <td><?php echo $user['pool']; ?></td> 
                <td><?php echo $user['rides']; ?></td> 
                <td><?php echo $user['total']; ?></td>   
                <td><?php echo $user['dat']; ?></td> 
                
            </tr>
          </tr>
       <?php endforeach; ?>
          </tbody>
        
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>
  </div>
</div>
</div>
</html>
<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter_zip.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#user').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>
 <script>
function myFunction() {
    window.print();
}
</script>
<?php include 'sidebar.php';?>


