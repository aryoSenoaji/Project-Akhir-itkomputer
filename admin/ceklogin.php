<?php
session_start();
ob_start();
include"../../penting!!.php";
$username = $_POST['username'];
$password = $_POST['password'];

$konekin = mysqli_query($koneksidb,"select * from cobacoba where USERNAME = '$username' and PASSWORD = '$password'");
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
	header("location:loginsite.php");
}
?>