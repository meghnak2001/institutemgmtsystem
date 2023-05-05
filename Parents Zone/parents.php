<?php
require('session.php');
?>
<?php
@session_start();
?>


<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parents</title>
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

    
            .bg1 {
                background:linear-gradient(to right, #ED213A 0%, #93291E 100%);
            }
            .bg2 {
                background:linear-gradient(to right, #FDC830 0%, #F37335 100%);
            }
            .bg3 {
                background:linear-gradient(to right, #FC466B 0%, #3F5EFB 100%);
            }
            .bg4 {
                background:linear-gradient(to right, #5614B0 0%, #0f9b0f 100%);
            }
            .bg5 {
                background:linear-gradient(to right, #FC466B 0%, #3F5EFB 100%);
            }
            .bg6 {
                background:linear-gradient(to right, #FF5F6D 0%, #FFC371 100%);
            }
            .bg7 {
                background:linear-gradient(to right, #DA4453 0%, #89216B 100%);
            }
            .bg8 {
                background:linear-gradient(to right, #159957 0%, #155799 100%);
            }
            .bg9 {
                background:linear-gradient(to right, #2F7336 0%, #AA3A38 100%);
            }

            .lol {
                transition: all 200ms ease-in-out;
            }





        </style>
    </head>
    <body>
    <style>
        .font24 {
            font-size:24px;
            transition:all 200ms ease-in-out;
        }
        .height {
            height:135px;
        }
        .card-hover {
            transition:all 250ms ease-in-out;
        }
        .card-hover:hover {
            box-shadow: 0 4px 14px 4px #857f7f;
            transform:translateY(-5px);
            transition:all 200ms ease-in-out;
        }
        .card-hover:hover .font24 {
            transform: scale(1.05);
            transition:all 200ms ease-in-out;
        }
        .f-left {
            float:left;
        }
        .tex {
            font-family:'Courier New';
            font-weight:900;
            text-decoration:underline;
            text-decoration-color:#5b4747;
        }
    </style>
	</head>
	<body>
<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
				<li class="menu-title">Parents Dashboard</li><!-- /.menu-title -->
                    <li class="active">
                        <a href="parents.php"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>
					<li>
                        <a href="viewatt.php"><i class="menu-icon fa fa-book"></i>View Attendence</a>
                    </li>		 
					<li>
                        <a href="notice.php"><i class="menu-icon fa fa-bell"></i>Notice By Admin</a>
                    </li>					
					<li>
                        <a href="profile.php"><i class="menu-icon fa fa-user-circle-o"></i>Profile</a>
                    </li>
					<li>
                        <a href="changepasswd.php"><i class="menu-icon fa fa-key"></i>Change Password</a>
                    </li>					
					<li>
                        <a href="logout.php"><i class="menu-icon fa fa-sign-in"></i>Logout</a>
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
	<!--/header-->
    <div class="container-fluid mt-3">

        <div class="row justify-content-center" style="padding-top:20px">
            <div class="col-11 w-100 mt-2">
                <div class="col-sm-4  f-left"><a href="parents.php" style="text-decoration:none"><div class="card bg1 text-center text-light height card-hover"><i class="fa fa-home font24 d-block my-auto"><h5 class="mt-1"><b>Dashboard</b></h5></i></div></a></div>
                <div class="col-sm-4 f-left"><a href="viewatt.php" style="text-decoration:none"><div class="card bg8 text-center text-light height card-hover"><i class="fa fa-book font24 d-block my-auto"><h5 class="mt-1"><b>View Attendence</b></h5></i></div></a></div>
                <div class="col-sm-4 f-left"><a href="notice.php" style="text-decoration:none"><div class="card bg3 text-center text-light height card-hover"><i class="fa fa-bell font24 d-block my-auto"><h5 class="mt-1"><b>Notification</b></h5></i></div></a></div>
            </div>
          <div class="col-11 w-100 mt-4">
                <div class="col-sm-4 f-left"><a href="profile.php" style="text-decoration:none"><div class="card bg7 text-center text-light height card-hover"><i class="fa fa-user-circle-o font24 d-block my-auto"><h5 class="mt-1"><b>Profile</b></h5></i></div></a></div>
                <div class="col-sm-4 f-left"><a href="changepasswd.php" style="text-decoration:none"><div class="card bg6 text-center text-light height card-hover"><i class="fa fa-key font24 d-block my-auto"><h5 class="mt-1"><b>Change Password</b></h5></i></div></a></div>
                <div class="col-sm-4 f-left"><a href="logout.php" style="text-decoration:none"><div class="card bg3 text-center text-light height card-hover"><i class="fa fa-sign-in font24 d-block my-auto"><h5 class="mt-1"><b>Logout</b></h5></i></div></a></div>
               
            </div>
            
        </div>
    </div>

<!---view notice--->
<div class="container mt-3 mb-5">
<div style="height: 75px;width: 100%;background: white;"><span style="line-height: 75px;font-size: 30px;color: black;padding-left: 10px;font-style: italic;">Notice:</span>
	<?php 
$con=mysqli_connect("localhost","root","","ims");
if($con==true)
{
	$sql="select* from anotice";
	$result=mysqli_query($con,$sql);
	echo "<table id='example' class='table table-striped table-bordered' style='width:100%;margin-top:10px;'>
	<tr><th>subject</th><th>Message</th><th>Date & Time</th></tr>";
		
		while($row=mysqli_fetch_array($result))
		{
		echo "<tr><td><img src='images/new.png' height='30px' width='30px'/>".$row['subject']."</td><td>".$row['msg']."</td><td>".$row['date']."</td></tr>";
		}
		echo "</table>";
}
?>
</div>
</div>
<div style="height: 25px"></div>
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
