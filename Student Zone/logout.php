<?php
session_start();
unset($_SESSION['student']);
echo "<script>alert('logout successfully...');location.href='../login.php';</script>";

?>
