<?php
require "../codes/DBManager.php";
$s=$_GET['d'];
$sql="DELETE FROM `feedback` WHERE email = '$s'";
$db=new DBManager();
$x=$db->ExecuteNonQuery($sql);
if($x==true)
{
	echo "<script>alert('Record Deleted');window.location.href='../feedbackmgmt.php';</script>";
}
else
{
	echo "<script>alert('Record not Delete');window.location.href='../feedbackmgmt.php';</script>";
}

?>