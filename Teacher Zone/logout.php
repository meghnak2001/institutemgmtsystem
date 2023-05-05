<?php
session_start();
unset($_SESSION['teacher']);
echo "<script>alert('logout successfully...');location.href='../login.php';</script>";

?>
