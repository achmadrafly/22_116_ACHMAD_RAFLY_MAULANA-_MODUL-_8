<?php 
// koneksi database
include 'conect.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nama1 = $_POST['nama1'];
$status = $_POST['sta'];
$ket = $_POST['ket'];
 
// update data ke database
mysqli_query($conect," UPDATE add_mhs SET nim ='$nim' , nama_mhs='$nama' , nama_dosen='$nama1' , sta = '$status' , ket = '$ket' WHERE id_mhs='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:utslayout.php");
 
?>