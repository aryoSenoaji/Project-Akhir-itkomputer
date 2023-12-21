<!--syntax untuk keamanan-->
<?php
session_start();
include"../../penting!!.php";
if(empty($_SESSION['user']) and empty($_SESSION['password'])){
	echo"<h1>Maaf anda belum login</h1>";
	return true;
}
?>