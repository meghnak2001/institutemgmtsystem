<?php
session_start();
require "DBManager.php";
$db=new DBManager();
$name=$_POST["name"];
$addhar=$_POST["addr"];
$email=$_POST["email"];
$mob=$_POST["mob"];
$qualification=$_POST["qualification"];
$exp=$_POST["exp"];
$msg=$_POST["msg"];
$pic=$_FILES["profile"]['name'];
$image_name = $_FILES['profile']['name'] ;
$target_file = "../simg/$image_name";

move_uploaded_file($_FILES['profile']['tmp_name'], $target_file);
$id=$email;



$quary="SELECT id from addteacher order by id DESC LIMIT 1";

$res=mysqli_query($con,$quary);
print_r($data=mysqli_fetch_assoc($res));
$lid= $data['id']+1;


if(isset($res))
{
	
	
	
	$fname=explode(" ",$name);
$fname=$fname[0];
$id=$fname."@".$lid;
	


}

//insert command
$sql="insert into addteacher(name,addhar,email,mob,qualification,exp,msg,pic,userid,passwd,utype) values('$name','$addhar','$email','$mob','$qualification','$exp','$msg','$pic','$id','ism123','Teacher')";
$x=$db->ExecuteNonQuery($sql);

if($x==true)
{

if(mail($email,"Institute Management System","Your Registration Successfully. Id is: $id and Password is: ism123","From:kamlapurisurendra1419@gmail.com"))
{
	



echo "<script>alert('Add Teacher ');window.location.href='../addfaculty.php'</script>";
}
else
{
	echo "<script>alert('Mail Send Success');window.location.href='../addfaculty.php'</script>";
}
}
else
{
	echo "<script>alert('Not submit');window.location.href='../addfaculty.php'</script>";
}
?>