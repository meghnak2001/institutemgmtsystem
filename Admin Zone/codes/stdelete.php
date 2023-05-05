<?php
require "../codes/DBManager.php";
$s=$_GET['d'];
$sql="DELETE FROM `addstudent` WHERE sid = '$s'";
$db=new DBManager();
$x=$db->ExecuteNonQuery($sql);
if($x==true)
{
	echo "<script>alert('Record Deleted');window.location.href='../student_details.php';</script>";
}
else
{
	echo "<script>alert('Record not Delete');window.location.href='../student_details.php';</script>";
}

?>