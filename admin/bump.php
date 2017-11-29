<?php include 'header.html';?>
<br><br>
<?php $db= new mysqli('localhost','root','','pos'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DASHBOARD | Admin</title>
<link rel="stylesheet" href="Styles/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="Styles/admin.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="Styles/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.ui.js"></script>
</head>
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
               <div class="col-md-3" style=" margin-top: 10%; margin-left: 20%;">  
                <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3" style="margin-top:10%;">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="to Date" />  
                </div>  
                <div class="col-md-5;" style="margin-top: 10%;">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div class="col-md-6" style="clear:both; margin-left:75%; margin-top: -3.5%;"> 
               <input type="button" name="clear" class="btn btn-info" value="Clear" onClick="window.location.reload()">
               </div>              
                <br /> 
<div class="container" style="margin-top: 4%;">
  <div class="panel panel-default">
    <div class="panel-heading">Bump Boat Details</div>
    <div class="panel-body">
  <div class="row">
    <div class="col-xs-12">
      <div id="user">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
             
              <th><center>Invoice No.</center></th>
              <th colspan="3"><center>Bump Boat</center></th>
              <th><center>Total No. of Tickets</center></th>
              <th><center>Amount to Pay</center></th>
              <th><center>Username</center></th>
              <th><center>Date</center></th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <th>K</th>
              <th>A</th>
              <th>D</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <?php $sql=$db->query("Select * from pool ORDER BY pool_ID desc");
            foreach ($sql as $key => $user) :
              ?>
           <tr>

                <td><?php echo $user['pool_ID'] ?></td>
                <td><?php echo $user['Tguest_adult']; ?></td>
                <td><?php echo $user['Tguest_kids']; ?></td>
                <td><?php echo $user['Tguest_discount']; ?></td> 
                <td><?php echo $user['total_guest']; ?></td>
                <td><?php echo $user['payment']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['date']; ?></td> 
                
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
                          url:"filter.php",  
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



