<?php
session_start();
include 'koneksi.php';

$username=$_POST['user'];
$password=$_POST['password'];

$query_cek = mysqli_query($conn, "select * from biodata where username='$username' and password='$password'");

$data = mysqli_num_rows($query_cek);

if($data > 0){
    $_SESSION['username'] = $username;
    $_SESSION['keterangan'] = "sudah login";

    echo "<script>alert('login berhasil');
    document.location.href='tes.php'</script>";
}else{
    echo "<script>alert('username dan password salah');
    document.location.href='login.html'</script>";
}
?>