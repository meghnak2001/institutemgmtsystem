<?php
session_start();
require "dbmanager.php";
$uid=$_SESSION['admin'];
$old=$_POST["opaas"];
$cp=$_POST["cpaas"];
$new=$_POST["npaas"];


//insert command


$sql1="select * from alogin where uid='$uid' and passwd='$old'";
echo $sql1;

$db=new dbmanager();

$x=$db->executenonquery($sql1);






if($cp!=$new)
{
	
	echo "<script>alert('New Password and Conform Password Not Same..');window.location.href='../changepasswd.php';</script>";;
	
}
else{
	


$sql="update alogin set passwd='$new' where uid='$uid'";



$x=$db->executenonquery($sql);



if($x==true)
{
	echo "<script>alert('Your Password Was Successfully Change');window.location.href='../../login.php';</script>";
}
else
{
	echo "<script>alert('Technical error! plese try letter');window.location.href='..../changepasswd.php';</script>";
}

}
?>