<!doctype html>
<?php
require('session.php');
?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin / Change Password</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo.jpg">
    <link rel="shortcut icon" href="images/logo.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
   body{
	   background:#f1f2f7;
   }
            .forget-pwd > a{
                color: #dc3545;
                font-weight: 500;
            }
            .forget-password .panel-default{
                padding: 31%;
                margin-top: -27%;
            }
            .forget-password .panel-body{
                padding: 10%;
                margin-bottom: -50%;
                background: #fff;
                border-radius: 5px;
                -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .btnForget{
                background: #c0392b;
                border:none;
            }


    </style>
</head>

<body>
<body>
<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
				<li class="menu-title">Admin Dashboard</li><!-- /.menu-title -->
                    <li>
                        <a href="admin.php"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>
					<li>
                        <a href="contact.php"><i class="menu-icon fa fa-address-book"></i>Contact Mgmt</a>
                    </li>
					<li>
                        <a href="feedbackmgmt.php"><i class="menu-icon fa fa-star-half-o"></i>Feedback Mgmt</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Student Mgmt</a>
                        <ul class="sub-menu children dropdown-menu">                            
						<li><i class="fa fa-user-o "></i><a href="addstudent.php">Add Student</a></li>
                            <li><i class="fa fa-user-circle-o"></i><a href="student_details.php">Student Details</a></li>
                            <li><i class="fa fa-user-o "></i><a href="parents_details.php">Parents Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-plus "></i>Faculty Mgmt</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user-plus"></i><a href="addfaculty.php">Add Faculty</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="faculty_details.php">Faculty Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Attendence Mgmt</a>
                        <ul class="sub-menu children dropdown-menu">
						    <li><i class="menu-icon fa fa-upload"></i><a href="takeattendenceselect.php">Take Faculty Attendence</a></li>
						    <li><i class="menu-icon fa fa-user"></i><a href="ftviewattendence.php">View Faculty Attendence</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="stviewattendence.php">View Student Attendence</a></li>
                           
                        </ul>
                    </li>  
					<li>
                        <a href="notice.php"><i class="menu-icon fa fa-paper-plane-o"></i>Send Notification</a>
                    </li>
					<li>
                        <a href="profile.php"><i class="menu-icon fa fa-user-circle-o"></i>Profile</a>
                    </li>
					<li class="active">
                        <a href="changepasswd.php"><i class="menu-icon fa fa-key"></i>Change Password</a>
                    </li>					
					<li>
                        <a href="logout.php"><i class="menu-icon fa fa-share"></i>Logout</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="adimages/logos.jpg" alt="Logo" style="width: 120px"></a>
                <a class="navbar-brand hidden" href="./"><img src="adimages/logos.jpg" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
		
        <div class="top-right">		
            <div class="header-menu">
                <div class="header-left">
                    

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">1</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 1 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>New Registraion</p>
                            </a>
                        </div>
                    </div>

                    
                </div>
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/logo.png" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>Profile</a>
                        <a class="nav-link" href="changepasswd.php"><i class="fa fa -cog"></i>Change Password</a>
                        <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- /#header
	changepaasword-->
	<div class="container forget-password">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <img src="https://i.ibb.co/rshckyB/car-key.png" alt="car-key" border="0">
                            <h2 class="text-center">Change Password?</h2>
                            <p>You can change your password here.</p>
                            <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="codes/changepasscode.php">
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="forgetAnswer" name="opaas" placeholder="Old Password" class="form-control"  type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="forgetAnswer" name="npaas" placeholder="New Password" class="form-control"  type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="forgetAnswer" name="cpaas" placeholder="Conform Password" class="form-control"  type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Change Password" type="submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
