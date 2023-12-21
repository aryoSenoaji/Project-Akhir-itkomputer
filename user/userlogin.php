<?php
session_start();
ob_start();
include"../../penting!!.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$konekin = mysqli_query($koneksidb,"select * from daftaruser where USERNAME = '$username' and PASSWORD = '$password'");
$test = mysqli_num_rows($konekin);

if ($test > 0){
$_SESSION['user'] = "$username";
$_SESSION['pass'] = "$password";
//header("location :adminsite.php");
echo"<meta http-equiv='refresh' content='0; url=index.php'>";	
}
else
{
	echo"<script>alert ('Login tidak sukses') </script>";
	header("location:login.php");
}
?>