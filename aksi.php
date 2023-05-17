<?php 
// koneksi database
include 'conect.php';
 
// menangkap data yang di kirim dari form

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nama1 = $_POST['nama1'];
$status = $_POST['sta'];
$ket = $_POST['ket'];
 
// menginput data ke database
mysqli_query($conect,"INSERT INTO add_mhs VALUES('','$nim','$nama','$nama1','$status','$ket')");
 
// mengalihkan halaman kembali ke index.php
header("location:utslayout.php");
 
?>