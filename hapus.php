<?php
include "koneksi.php";
$nik = $_GET['nik'];

mysqli_query($conn,"DELETE FROM daftarpenduduk WHERE nik = '$nik'");
header("location:informasi.php?pesan=input");
?>