<?php
session_start();
require "dbmanager.php";
$uid=$_SESSION['teacher'];
$old=$_POST["opaas"];
$cp=$_POST["cpaas"];
$new=$_POST["npaas"];


//insert command


$sql1="select * from addteacher where userid='$uid' and passwd='$old'";

$db=new dbmanager();

$x=$db->executenonquery($sql1);





if($cp!=$new)
{
	
	echo "<script>alert('New Password and Conform Password Not Same..');window.location.href='../changepasswd.php';</script>";;
	
}
else{
	


$sql="update addteacher set passwd='$new' where userid='$uid'";

$db=new dbmanager();

$x=$db->executenonquery($sql);



if($x==true)
{
	echo "<script>alert('Your Password Was Successfully Change');window.location.href='../changepasswd.php';</script>";
}
else
{
	echo "<script>alert('Technical error! plese try letter');window.location.href='..../changepasswd.php';</script>";
}
}
?>