<?php
session_start();
unset($_SESSION['admin']);
echo "<script>alert('logout successfully...');location.href='../login.php';</script>";

?>
