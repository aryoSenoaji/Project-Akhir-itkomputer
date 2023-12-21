<?php
$_SERVER="localhost";
$user="root";
$password="";
$database="latihan";

$koneksidb=mysqli_connect($_SERVER,$user,$password,$database) or die ('Database tidak terhubung');
?>