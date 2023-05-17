<?php 

include 'conect.php';
$id = $_GET['id'];
 
mysqli_query($conect,"DELETE FROM add_mhs WHERE id_mhs ='$id'");
header("location:utslayout.php");

?>