<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "<script>alert('Plz login here');location.href='../login.php';</script>";

}

?>
