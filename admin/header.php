<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/head.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>

<header>
	<nav id="header" class="navbar navbar-fixed-top">
		<div class="container" style="padding: 5px;">
		   	<ul class="nav nav-header navbar-nav navbar-left masthead-nav">
		        <li role="user"><a href="index.php"><span class="glyphicon glyphicon-user"></span>  Accounts</a></li>
                <li role="user"><a href="#" data-toggle="modal" data-target="#bannerformmodal"><span class="glyphicon glyphicon-plus"></span>  Add Accounts</a></li>
    			
                <li class="dropdown" style=" color: white; text-decoration-color: white;">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-stats"></span>  SALES & REVENUE <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="revenue.php">Daily</a></li>
                            <li class="divider"></li>
                            <li><a href="weekly.php">Weekly</a></li>
                            <li class="divider"></li>
                            <li><a href="monthly.php">Monthly</a></li>
                            <li class="divider"></li>
                            <li><a href="yearly.php">Yearly</a></li>
                            
                        </ul>
               </li>
                     <li class="dropdown">
                        <a href="header.html" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-folder-open"></span> History<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=" dropdown-submenu"><a href="history_rides.php" class="dropdown-toggle" data-toggle="dropdown">Pools</b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="wave.php">Wave Pool</a></li>
                                    <li class="divider"></li>
                                    <li><a href="giant.php">Giant Slide</a></li>
                                   
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class=" dropdown-submenu"><a href="history_rides.php" class="dropdown-toggle" data-toggle="dropdown">Rides</b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="atv.php">ATV</a></li>
                                    <li class="divider"></li>
                                    <li><a href="bumber.php">Bumber Boat</a></li>
                                    <li class="divider"></li>
                                    <li><a href="buggy.php">Buggy Kart</a></li>
                                    <li class="divider"></li>
                                    <li><a href="bump.php">Bump Car</a></li>
                                    <li class="divider"></li>
                                    <li><a href="cable.php">Cable Car</a></li>
                                    <li class="divider"></li>
                                    <li><a href="gkart.php">Go Kart</a></li>
                                    <li class="divider"></li>
                                    <li><a href="segway.php">Segway</a></li>
                                    <li class="divider"></li>
                                    <li><a href="zipline.php">Zipline</a></li>
                                   
                                </ul>

                        </ul>
                    </li>
	       </ul>


            <ul class="nav nav-header navbar-nav navbar-right masthead-nav">
                <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
            </ul>
		</div>
	</nav>
</header>
<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
            function() {
                $('.dropdown-submenu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-submenu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
</script>

<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal" style="margin-top: 2%;">
<div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel" style="font-size: 120%;"><img src="user.jpg" style="border-radius: 50%; width:25%; height:25%;"> Add Employee Account</h4>
                </div>
                <div class="modal-body">
                     <form action="register.php" method="POST" enctype="multipart/form-data" autocomplete="off" style="margin-top: -10%;">
                            <div class="alert alert-error"></div>
                              <div class="form-group">
                                    <div class="input-group">                               
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="lastname" type="text" class="form-control" placeholder="Last Name" name="lastname" required />
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="input-group">                               
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="firstname" type="text" class="form-control" placeholder="First Name" name="firstname" required />
                                    </div>
                              </div>
                                <div class="form-group">
                                    <div class="input-group">                               
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" onchange="validateEmailAdd();" required />
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="input-group">                               
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="input-group">                               
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="confirmpassword" type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                                        <select id="sex" class="form-control" placeholder="Sex" name="gender" class="selectpicker" required />
                                            <option>Sex</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>
                            </div>
                               
                              <div class="form-group">
                                    <div class="input-group">                               
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input id="phone_mobile" type="number" class="form-control" placeholder="Mobile" name="mobile" required />
                                    </div>
                              </div>
                              <div class="form-group">
                                    <div class="input-group">                               
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <input id="address" type="text" class="form-control" placeholder="Address" name="address" required />
                                    </div>
                              </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                              </div> 
                            </form>
                  </div>
                       
        </div>
        </div>
      </div>
    </div>
</html>