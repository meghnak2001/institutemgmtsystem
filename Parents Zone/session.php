<?php
session_start();
if(!isset($_SESSION['parents']))
{
	echo "<script>alert('Plz login here');location.href='../login.php';</script>";

}

?>
