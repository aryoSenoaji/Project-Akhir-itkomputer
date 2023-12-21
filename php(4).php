<?php 
if(isset($_POST['Send'])){
	include"../penting!!.php";
	$namagambar = $_FILES['productpost']['name'];
	$tmp_name = $_FILES['productpost']['tmp_name'];
	$lokasi = "productpost/$namagambar";
	$nama=$_POST['nama'];
	$deskripsi=$_POST['deskripsi'];
	$kategori=$_POST['kategori'];
	$jumlah=$_POST['jumlah'];
	$brand=$_POST['brand'];
	$sizing=$_POST['sizing'];
	$ongkir=$_POST['ongkir'];
	$harga=$_POST['harga'];
	
if(move_uploaded_file($tmp_name,$lokasi))
{
	$input = mysqli_query($koneksidb,"insert into upload_product values (null,'$namagambar','$nama','$deskripsi','$kategori','$jumlah','$brand','$sizing','$ongkir','$harga')");
	
if($input > 0)
	echo"<script>alert('Input Success')</script>";
else
	echo"<h1>Input Gagal</h1>";
}
}
?>