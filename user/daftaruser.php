<?php include"../../penting!!.php"; ?>
<?php
if(isset($_POST['Send'])){
$username=$_POST['username'];
$password=$_POST['password'];
$input = mysqli_query($koneksidb,"insert into daftaruser values (null,'$username','$password')");

if($input > 0)
	echo"<script>alert('Daftar Sukses')</script>";
else
	echo"<script>alert('Daftar Gagal')</script>";
}
?>