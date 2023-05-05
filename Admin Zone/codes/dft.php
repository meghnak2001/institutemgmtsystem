<?php
require "../codes/DBManager.php";
$s=$_GET['d'];
$sql="DELETE FROM `addteacher` WHERE userid = '$s'";
$db=new DBManager();
$x=$db->ExecuteNonQuery($sql);
if($x==true)
{
	echo "<script>alert('Record Deleted');window.location.href='../faculty_details.php';</script>";
}
else
{
	echo "<script>alert('Record not Delete');window.location.href='../faculty_details.php';</script>";
}

?>