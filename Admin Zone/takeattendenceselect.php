<!doctype html>
<?php
require('session.php');
?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMS/Teacher Attendence</title>
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
                    <li class="menu-item-has-children dropdown active">
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
     <!--MDB Tables-->
        <div class="container-fluid hm-gradient">

            <div class="card mt-0">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12 s">
                            <h2 class="pt-3 pb-4 pl-1 font-bold font-up deep-purple-text">Take Teacher <span>Attendence</span></h2>
                        </div>              
                    </div>
					
                    <!-- Grid column -->
                    <!--Table-->
					<?php 
$con=mysqli_connect("localhost","root","","ims");
if($con==true)
{


if(isset($_POST['submitatt']))
{

if(isset($_POST['att']))
{
	$arr=$_POST['att'];
	
	
	$q="select id from addteacher";
	$res=mysqli_query($con,$q);
	
	while($arrr=mysqli_fetch_assoc($res))
	
	
	{
		
		$a=$arrr['id'];
		
		$q2="select * from tatt where tid='$a' and date=curdate()";
		$res1=mysqli_query($con,$q2);
		
		if(mysqli_fetch_array($res1)!=0)
		{
		
			continue;
		}
		
		
		
		
		$q1="insert into tatt(tid,date,status) values('$a',curdate(),'0')";

	$result1=mysqli_query($con,$q1);
		
		
		
		foreach($arr as $ar){
			
			if($ar == $a)
			{
				
				
				
				$q1="update tatt set status='1' where tid='$ar' and date=curdate()";
				

	$result1=mysqli_query($con,$q1);
	
			}
				
	}

}
echo "<script>alert('Attendence Submit..');window.location.href='ftviewattendence.php'</script>";


}



}



$sql="select* from addteacher";
    $result=mysqli_query($con,$sql);

    ?>
<form method="post">
<table class="table table-striped table-bordered"><tr><th>User Id</th><th>Name</th><th>Email</th><th>Present</th></tr>


    <?php

        while($row=mysqli_fetch_array($result))
        {
        echo "<tr><td>".$row['userid']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td><input type='checkbox' name='att[]' value=".$row['id']."></td></tr>";

        }
        echo "</table>";

}

?>
					
					</div>
					<div style="padding:10px;padding-top:10px"><input type="submit" class="btn btn-info s" name="submitatt" style="width:10%;"/></div>
					
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

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
<script src="assets/js/init/weather-init.js"></script>

<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="assets/js/init/fullcalendar-init.js"></script>

<!--Local Stuff-->
<script>
    jQuery(document).ready(function($) {
        "use strict";

        // Pie chart flotPie1
        var piedata = [
            { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
            { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
            { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
        ];

        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2/3,
                        threshold: 1
                    },
                    stroke: {
                        width: 0
                    }
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        });
        // Pie chart flotPie1  End
        // cellPaiChart
        var cellPaiChart = [
            { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
            { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
        ];
        $.plot('#cellPaiChart', cellPaiChart, {
            series: {
                pie: {
                    show: true,
                    stroke: {
                        width: 0
                    }
                }
            },
            legend: {
                show: false
            },grid: {
                hoverable: true,
                clickable: true
            }

        });
        // cellPaiChart End
        // Line Chart  #flotLine5
        var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

        var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
        // Line Chart  #flotLine5 End
        // Traffic Chart using chartist
        if ($('#traffic-chart').length) {
            var chart = new Chartist.Line('#traffic-chart', {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                series: [
                    [0, 18000, 35000,  25000,  22000,  0],
                    [0, 33000, 15000,  20000,  15000,  300],
                    [0, 15000, 28000,  15000,  30000,  5000]
                ]
            }, {
                low: 0,
                showArea: true,
                showLine: false,
                showPoint: false,
                fullWidth: true,
                axisX: {
                    showGrid: true
                }
            });

            chart.on('draw', function(data) {
                if(data.type === 'line' || data.type === 'area') {
                    data.element.animate({
                        d: {
                            begin: 2000 * data.index,
                            dur: 2000,
                            from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                            to: data.path.clone().stringify(),
                            easing: Chartist.Svg.Easing.easeOutQuint
                        }
                    });
                }
            });
        }
        // Traffic Chart using chartist End
        //Traffic chart chart-js
        if ($('#TrafficChart').length) {
            var ctx = document.getElementById( "TrafficChart" );
            ctx.height = 150;
            var myChart = new Chart( ctx, {
                type: 'line',
                data: {
                    labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                    datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                    ]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    }

                }
            } );
        }
        //Traffic chart chart-js  End
        // Bar Chart #flotBarChart
        $.plot("#flotBarChart", [{
            data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
            bars: {
                show: true,
                lineWidth: 0,
                fillColor: '#ffffff8a'
            }
        }], {
            grid: {
                show: false
            }
        });
        // Bar Chart #flotBarChart End
    });
</script>
</body>
</html>
