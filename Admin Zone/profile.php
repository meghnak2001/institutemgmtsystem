<!doctype html>
<?php
require('session.php');
?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin / Profile</title>
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
		.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
} 
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}
.s
{
background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
  color: #fff;
}

<!---Profile-->

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
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
					<li class="active">
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
	<!---data show--->
	<div style="padding-top:50px;padding-bottom:50px;">
     <div class="container rounded bg-white">
	 <form method="post" action="codes/changepasscode.php">
    <div class="row" style="padding:20px">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
			<img class="rounded-circle mt-5" src="images/logo.png" width="90"><span class="font-weight-bold">Admin</span>
			<span class="text-black-50">itsurendra1419@gmail.com</span><span>POLYGUIDE INSTITUTION</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <a href="admin.php"><h6>Back to home</h6></a>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Name" value="Admin" disabled="disabled"></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="07/11/2000" placeholder="Doe" disabled="disabled"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" value="+91 7355568297" placeholder="Phone number" disabled="disabled"></div>
					<div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="itsurendra1419gmail.com" disabled="disabled"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="address" value="529E/88 Mahanagar Lucknow" disabled="disabled"></div>
                    <div class="col-md-6"><input type="password" name="opaas" class="form-control" value="admin" placeholder="Old Password" disabled="disabled"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="password" name="npaas" class="form-control" placeholder="New Password"></div>
                    <div class="col-md-6"><input type="password" name="cpaas" class="form-control" placeholder="Conform Password"></div>
                </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
        </div>
    </div>
	</form>
</div>
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
