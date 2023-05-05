<?php
session_start();
unset($_SESSION['parents']);
echo "<script>alert('logout successfully...');location.href='../login.php';</script>";

?>
