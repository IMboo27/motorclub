<?php

include'koneksi.php';

$email                      = $_POST['email'];
$password                   = $_POST['password'];

$simpan = mysqli_query($koneksi,"INSERT INTO admin VALUES ('','$email','$password')");

if($simpan){
    echo'<script>alert("Data Berhasil Disimpan!"); </script>';
    echo'<script>window.location = "html_form/indexlogin.php"; </script>';
}else {
    echo'<script>alert("Data Gagal Disimpan"); </script>';
    echo'<script>window.location = "register.php"; </script>';
}

?>