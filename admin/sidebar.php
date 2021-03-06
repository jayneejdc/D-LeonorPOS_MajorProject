<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/head.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.ui.js"></script>
</head>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" style="padding-bottom: 5%; margin-bottom: 2%;">
            <img src="logoo.png" alt="LOGO" style="width: 9%;">
            <h5 style="color: white; margin-top: -4%; font-size: 18px; margin-left:12%;">D LEONOR RESORT AND ADVENTURE PARK</h5>
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">            
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-users"></i> Users </a>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#bannerformmodal"><i class="fa fa-fw fa-user-plus"></i>  Add Accounts </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-bar-chart-o"></i> Revenue & Sales <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-1" class="collapse">
                    <li><a href="revenue.php"><i class="fa fa-calendar"></i> Daily </a></li>
                    <li><a href="weekly.php"><i class="fa fa-calendar"></i> Weekly </a></li>
                    <li><a href="monthly.php"><i class="fa fa-calendar"></i> Monthly </a></li>
                    <li><a href="yearly.php"><i class="fa fa-calendar"></i> Yearly </a></li>
                </ul>
            </li>
            <li>
                <a href="report.php"><i class="fa fa-table"></i>   Reports </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-5"><i class="fa fa-fw fa-history"></i>  History <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-5" class="collapse">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-6"><i class="fa fa-angle-double-right"></i> Pool <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-6" class="collapse"></i></a>
                            <li><a href="wave.php"><i class="fa fa-table"></i> Wave Pool </a></li>
                            <li><a href="giant.php"><i class="fa fa-table"></i> Giant Slide </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#submenu-7"><i class="fa fa-angle-double-right"></i> Rides <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                        <ul id="submenu-7" class="collapse"></i></a>
                            <li><a href="atv.php"><i class="fa fa-table"></i> ATV Truck </a></li>
                            <li><a href="bumber.php"><i class="fa fa-table"></i> Bumber Boat </a></li>
                            <li><a href="buggy.php"><i class="fa fa-table"></i> Buggy Kart </a></li>
                            <li><a href="bump.php"><i class="fa fa-table"></i> Bump Car </a></li>
                            <li><a href="cable.php"><i class="fa fa-table"></i> Cable Car </a></li>
                            <li><a href="gkart.php"><i class="fa fa-table"></i> Go Kart </a></li>
                            <li><a href="segway.php"><i class="fa fa-table"></i> Segway </a></li>
                            <li><a href="zipline.php"><i class="fa fa-table"></i> Zipline </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal" style="margin-top: 2%;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 120%;">
                        <img src="user.jpg" style="border-radius: 50%; width:20%;"> Add Employee Account</h4>
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
                                <input id="username" type="username" class="form-control" placeholder="Username" name="username" required />
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

<style type="text/css">
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}
</style>

<script type="text/javascript">
    $(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
</script>


</html>