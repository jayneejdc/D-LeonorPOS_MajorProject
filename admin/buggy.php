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
<div class="col-md-3" style=" margin-top: 2%; margin-left: 30%;">
  <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
</div>  
<div class="col-md-3" style="margin-top:2%;">  
  <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
</div>  
<div class="col-md-5;" style="margin-top: 2%;">  
  <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
</div>  
<div class="col-md-6" style="clear:both; margin-left:85%; margin-top: -2.5%;"> 
  <input type="button" name="clear" class="btn btn-info" value="Clear" onClick="window.location.reload()">
</div>              
<br>
<div class="container" style="margin-top: 3%; margin-left: 20%; width: 75%;">
  <div class="panel panel-default">
    <div class="panel-heading">Buggy Kart Details</div>
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
              <th colspan="3"><center>Buggy Kart</center></th>
              <th><center>Date</center></th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th></th>
              <th></th>
              <th>K</th>
              <th>A</th>
              <th>D</th>
              <th></th>
            </tr>
            <?php $sql=$db->query("Select * from buggy_kart ORDER BY id desc");
            foreach ($sql as $key => $user) :
              ?>
           <tr>

                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['bkkid']; ?></td>
                <td><?php echo $user['bkadult']; ?></td>
                <td><?php echo $user['bkdisc']; ?></td> 
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
                          url:"filter_buggy.php",  
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
<?php include 'sidebar.php';?>
