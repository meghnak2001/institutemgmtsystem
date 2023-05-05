
<?php
require('session.php');
?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher/View Student Attendence</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo.jpg">
    <link rel="shortcut icon" href="images/logo.jpg">
    <!-- Latest compiled and minified CSS -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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
    <!-- Latest compiled and minified CSS -->

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

    </style>
</head>

<body>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
			 <li class="menu-title">Teacher Dashboard</li><!-- /.menu-title -->
                <li >
                    <a href="teacher.php"><i class="menu-icon fa fa-home"></i>Dashboard</a>
                </li>
                <li>
                    <a href="feedbackmgmt.php"><i class="menu-icon fa fa-star-half-o"></i>Feedback Managment</a>
                </li>
				
                <li>
                    <a href="student_details.php"><i class="menu-icon fa fa-user-circle-o"></i>Student Details</a>
                </li>
                <li class="menu-item-has-children dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Attendence Mgmt</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-upload"></i><a href="takeattendenceselect.php" data-bs-toggle="modal" data-bs-target="#exampleModal">Take Student Attendence</a></li>
						<li><i class="menu-icon fa fa-book"></i><a href="viewatt.php">View Student Attendence</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Online Class</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-upload"></i><a href="upload.php">Upload Lecture</a></li>
                        <li><i class="menu-icon fa fa-book"></i><a href="viewlecture.php">View Lecture</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="fat.php"><i class="menu-icon fa fa-user-plus"></i>View Attendence</a>
                </li>
                <li>
                    <a href="profile.php"><i class="menu-icon fa fa-user-circle-o "></i>Profile</a>
                </li>
                <li>
                    <a href="changepasswd.php"><i class="menu-icon fa fa-key"></i>Change Password</a>
                </li>
                <li>
                    <a href="logout.php"><i class="menu-icon fa fa-sign-in"></i>Logout</a>
                </li>
                <!-- Button trigger modal --

            </ul>
        </div>/.navbar-collapse -->
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
      <!--MDB Tables-->
        <div class="container-fluid hm-gradient" style="overflow-x:auto;">
            <div class="card mt-0">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12 s">
                            <h2 class="pt-3 pb-4 pl-1 font-bold font-up deep-purple-text">View Student<span> Attendence</span></h2>
                        </div>              
                    </div>
					<div style="height:10px"></div>
		
<?php 
$con=mysqli_connect("localhost","root","","ims");
if($con==true)
{
	$sql="select a.*, b.* from satt a, addstudent b where a.sid = b.id";
	$result=mysqli_query($con,$sql);
	echo "<table id='example' class='table table-striped table-bordered' style='width:100%;margin-top:10px;'>
	<thead><tr><th>Roll No.</th><th>Name</th><th>Branch</th><th>Year</Th><th>Date</th><th>Status</th></tr></thead>";
		
		while($row=mysqli_fetch_array($result))
		{
		echo "<tr><td>".$row['id']."</td><td>".$row['sname']."</td><td>".$row['branch']."</td><td>".$row['year']."</td><td>".$row['date']."</td><td>";
		
		if($row['status']==1)
		{
			echo "<span class='fa fa-check-circle text-success' style='font-size:25px;'></span>";
		}
		else{
				echo "<span class='fa  fa-times-circle text-danger' style='font-size:25px;' ></span>";
		}
		
		echo "</td></tr>";
		}
		echo "</table>";
}
?>
		<!--table-->
					
					</div>
					</div>
				</div>
<!-- /#right-panel -->
 <!--table script-->
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> 
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="Post" action="takeattendenceselect.php">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Take Attendence</h5><br>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-select" required name="branch">
            <option>Select</option>
            <option>Information Technology</option>
        <option>Civil</option>
    <option>Mechanical</option></select>
    <br>

    <select class="form-select" required name="year">
        <option>Select</option>
        <option>1</option>
        <option>2</option>
    <option>3</option></select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="take" />

</form>
    </div>
  </div>
</div>
</body>
</html>
