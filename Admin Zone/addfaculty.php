<!doctype html>
<?php
require('session.php');
?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin / Add Faculty</title>
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
            .header{
                padding-top: 1%;
                padding-bottom: 1%;
                background: #495057;
                color: #fff;
                width: 100%;

            }
            .header-left i{
                margin-left: 5%;
            }
            .header-right h4{
                text-align: right;
                margin-right: 10%;
                line-height: 2;
            }
            .content{
                background: #e9f8ed;
                width: 100%;
            }
            .content .form-content{
                padding:5%;
                padding-left: 18%;
                padding-right: 18%;
            }
            .content .form-content .input-group .input-group-text{
                background:#333;
                color:#fff;
                border:none;
                border-radius:0;
                font-weight: 600;
            }
            .content .form-content .input-group input{
                border-radius: 0;
            }
            .content .form-content .input-group input:focus{
                border-color: transparent;
            }
            .content .form-content h4{
                margin-bottom:5%;
            }
            .content .form-content button{
                background: #333;
                color: #fff;
                border-radius: 0;
                width: 20%;
                font-weight: 600;
            }
        #weatherWidget .currentDesc {
            color: #ffffff!important;
        }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

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
                    <li class="menu-item-has-children dropdown active">
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
					<li>
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
	<!---data show--->
     <div class="container-fluid header">
        <div class="row">
            <div class="col-md-6 header-left">
                <i class="fa fa-user-plus fa-3x"></i>
            </div>
            <div class="col-md-6 header-right">
                <h4>Add Faculty</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid content">
        <form action="codes/addteacher.php" method="post" enctype="multipart/form-data">
            
            <div class="form-content">
                <h4 style="font-weight: bold">Please fill the details</h4>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Name" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required placeholder="Aadhar Number" name="addr" maxlength="14">
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required placeholder="Email" name="email">
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required placeholder="Mobile Number" name="mob">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required placeholder="Qualification" name="qualification">
                </div>
				<div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required placeholder="Exprience" name="exp">
                </div>
                <div class="input-group mb-3">
                    <textarea name="msg"class="form-control" rows="3" aria-label="Username" aria-describedby="basic-addon1" required placeholder="Description"></textarea>
                </div>

                <div class="input-group mb-3">
                    <input type="file" required aria-label="name" aria-describedby="basic-addon1" name="profile">
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-default"  style="min-width: 100px">Submit</button>
                </div>
            </div>
        </form>
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

</script>
</body>
</html>
