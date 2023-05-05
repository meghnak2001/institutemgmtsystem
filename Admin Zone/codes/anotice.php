<?php
require "DBManager.php";
$db=new DBManager();
$sub=$_POST["sub"];
$msg=$_POST["msg"];
$pic=$_FILES["profile"]['name'];
$image_name = $_FILES['profile']['name'] ;
$target_file = "../simg/$image_name";
move_uploaded_file($_FILES['profile']['tmp_name'], $target_file);


//insert command

$sql="insert into anotice(subject,msg,pic) values('$sub','$msg','$pic')";

$db=new dbmanager();

$x=$db->executenonquery($sql);
if($x==true)
{
	echo "<script>alert('Notice Send');window.location.href='../notice.php';</script>";
}
else
{
	echo "<script>alert('Notice not send');window.location.href='../notice.php';</script>";
}

?>