
<br><br>


<?php $db= new mysqli('localhost','root','','pos'); ?>
<html>
   <head>
     <title>Del Leonor Hotel | Admin</title>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css" type="text/css" rel="stylesheet">
          <link rel="stylesheet" href="admin.css" type="text/css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="bootstrap/js/jquery.min.js"></script>
          <script src="bootstrap/js/bootstrap.min.js"></script>
          <script src="bootstrap/js/jquery-1.9.1.js"></script>
   </head>
   <body>
    <br/>
      <div class="container" style="width: 100%; position: fixed; margin-left: -3%;  margin-top: 1%;"><br/>
<div class="panel panel-default" style="margin-left:24%;">
    <div class="panel-heading">User Status Details</div>
    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
     </div>
        <table class="table table-bordered table-striped">
           <tr>
                <td>Employee ID</td>
                <td>Last Name</td>
                <td>First Name</td>
                <td>Username</td>
                <td>Last Login</td>
                <td>Action</td>
            </tr>
            <?php $sql=$db->query("Select * from user");
                foreach ($sql as $key => $user) :
                  ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['lastLogin']; ?>
                <td><i data="<?php echo $user['id'];?>" class="status_checks btn <?php echo ($user['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($user['status'])? 'Active' : 'Inactive'?></i></td>
            </tr>
           <?php endforeach; ?>
        </table>
  </div>
</div>
</div>
</body>
</html>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
  var current_element = $(this);
  url = "ajax.php";
  $.ajax({
  type:"POST",
  url: url,
  data: {id:$(current_element).attr('data'),status:status},
  success: function(data)
    {   
      location.reload();
    }
  });
  }      
});
</script>

<?php include 'sidebar.php';?>