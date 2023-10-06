<?php

include "koneksi.php";

$img_produk         = $_FILES['img_produk']['name'];
$nama_produk        = $_POST['nama_produk'];
$ket_produk         = $_POST['ket_produk'];

$submit = mysqli_query($koneksi,"INSERT INTO produk_motor VALUES (NULL,'$img_produk','$nama_produk','$ket_produk')");

if($submit){
    move_uploaded_file($_FILES['img_produk']['tmp_name'], '../assets_form/images/users/'.$img_produk);
    echo'<script>alert("Data Berhasil Disimpan!"); </script>';
    echo'<script>window.location.href = "widgets.php"; </script>';
}else {
    echo'<script>alert("Data Gagal Disimpan"); </script>';
    echo'<script>window.location.href = "widgets.php"; </script>';
}

?>