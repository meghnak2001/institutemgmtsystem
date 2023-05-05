<?php
require "DBManager.php";
$db=new DBManager();
$sname=$_POST["sname"];
$semail=$_POST["semail"];
$smob=$_POST["smob"];
$pname=$_POST["pname"];
$pemail=$_POST["pemail"];
$pmob=$_POST["pmob"];
$addhar=$_POST["addhar"];
$gender=$_POST["gender"];
$branch=$_POST["branch"];
$year=$_POST["year"];
$DOB=$_POST["dob"];
$c_address=$_POST["cadd"];
$p_address=$_POST["padd"];
$district=$_POST["district"];
$pic=$_FILES["profile"]['name'];
$image_name = $_FILES['profile']['name'] ;
$target_file = "../simg/$image_name";

move_uploaded_file($_FILES['profile']['tmp_name'], $target_file);



$id=$semail;
$quary="SELECT id from addstudent order by id DESC LIMIT 1";
$res=mysqli_query($con,$quary);
$data=mysqli_fetch_assoc($res);
if($data!=null)
{
	$stid= $data['id']+1;
$ptid= $stid;
}else
{
	$stid=1;
$ptid=1;
}





if(isset($res))
{
$fname=explode(" ",$sname);
$fname=$fname[0];
$studentid=$fname."@".$stid;
$ppname=explode(" ",$pname);
$ppname=$ppname[0];
$parentsid=$ppname."@".$ptid;
}

//insert command
$sql="insert into addstudent(sname,semail,smob,pname,pemail,pmob,aadhar,gender,branch,year,DOB,c_address,p_address,district,pic,sid,spaas,stype,pid,ppass,ptype) values('$sname','$semail','$smob','$pname','$pemail','$pmob','$addhar','$gender','$branch','$year','$DOB','$c_address','$p_address','$district','$pic','$studentid','student@ism','Student','$parentsid','parents@ism','Parents')";
$x=$db->ExecuteNonQuery($sql);

if($x==true)
{

if(mail($semail,"Institute Management System","Your Registration Successfully. Your Id is: $studentid & Password is: student@ism","From:kamlapurisurendra1419@gmail.com"))
{
if(mail($pemail,"Institute Management System","Your Registration Successfully. Student Id is: $studentid & Password is: student@ism and Parents Id is: $parentsid and password is : parents@ism","From:kamlapurisurendra1419@gmail.com"))
{
	



echo "<script>alert('Add Student');window.location.href='../addstudent.php'</script>";
}
}
else
{
	echo "<script>alert('Mail Send Success');window.location.href='../addstudent.php'</script>";
}
}
else
{
	echo "<script>alert('Not submit');window.location.href='../addstudent'</script>";
}

?>