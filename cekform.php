<?php 
include'koneksi.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE email='$email' AND password='$password'");
$data = mysqli_fetch_array($login);

if(!empty($data)) {
    $_SESSION['email']                  = $data['email'];
    $_SESSION['password']               = $data['password'];

    echo "<script>alert('Anda Berhasil Login');</script>";
    echo "<script>window.location = 'html_form/indexlogin.php';</script>";

} else {
    echo "<script>alert('Akun Tidak Terdaftar!');</script>";
    echo "<script>window.location = 'from.php';</script>";

}

?>