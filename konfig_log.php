<?php 
//mengakses config.php
include 'config.php';
//
$user = $_POST['usename'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE usename ='$user' and pass = '$pass'");
$cek = mysqli_num_rows ($login);

if ($cek > 0) {
    session_start();
    $_SESSION['usename'] = $usename;
    $_SESSION['status'] = "login successful";
    echo "berhasil login successful";
    header ("location: modul5.php");
    echo "
        <script>
            alert('Login successful');
            document.location.href = 'modul5.php';
        </script>
        ";
    header("location: modul5.php");
}
else {
    echo "
        <script>
            alert('Login gagal');
            document.location.href = 'utslogin.php';
        </script>d
        ";
    header("location: utslogin.php");
}

?>