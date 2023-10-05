<?php 
session_start();
session_destroy();
// header("location:login.php");

echo "<script>alert('Akun Telah Logout ');</script>";
echo "<script>window.location = '../index.php'</script>"; //untuk versi yang tidak support
?>