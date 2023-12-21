<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css">
	<style>
	body {
		overflow-x: hidden;}

	</style>
</head>
<body>
	<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
		  <a class="navbar-brand" href="#"><i class="fas fa-house-user mr-2"></i>SELAMAT DATANG ADMIN | <b>RETRO STORE</b></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
			<div class="icon ml-auto">
			<h5><i class="fas fa-bullhorn mr-2"></i>
				<a href="../../logout.php" class="btn btn-light">LOGOUT</a>
			</h5>
			</div>
		  </div>
		</nav>
		</div>
	</div>
	
<div class="row no-gutters">
	<div class="col-md-2 bg-dark pr-2 pt-2 pb-5">
		<ul class="nav flex-column">
		  <li class="nav-item">
			<h5><a class="nav-link active text-light" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary"></h5>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active text-light" href="?data=etalase"><i class="fas fa-cloud mr-2"></i>Etalase Penjualan</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
			<a class="nav-link active text-light" href="?data=pesan"><i class="far fa-comment mr-2"></i>Pesan Pengunjung</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
			<a class="nav-link active text-light" href="?data=sliderEU"><i class="far fa-question-circle mr-2"></i>Hapus Slider</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
			<a class="nav-link active text-light" href="?data=slider"><i class="far fa-images mr-2"></i>Update Slider</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
			<a class="nav-link active text-light" href="?data=kalender"><i class="far fa-calendar-alt mr-2"></i>Calender</a><hr class="bg-secondary">
		  </li>
		</ul>
		</div>
	<div class="col-md-10">
		<?php include"penting!!.php"; ?>
		<?php
if (isset($_GET['data'])){
	if ($_GET['data']=="etalase")
	{
	include"etalase.php";
	}
	elseif($_GET['data']=="pesan")
	{
		include"pesanpengunjung.php";
	}
	elseif($_GET['data']=="sliderEU")
	{
		include"sliderEditHapus.php";
	}
	elseif($_GET['data']=="kalender"){
		include"calendar.php";
	}
	elseif($_GET['data']=="slider")
	{
		include"slider.php";
	}
	elseif ($_GET['data']=="hapusproduk"){
		$query=mysqli_query($koneksidb,"delete from upload_product where id=$_GET[id]");
		if($query > 0)
		{
			echo"<h1>Data telah dihapus</h1>";
			echo"<meta http-equiv='refresh' content='2; url=?data=etalase'>";
		}
		else
			echo"Not Succes";
		}
	elseif($_GET['data']=="editproduk"){
	$query=mysqli_query($koneksidb,"select * from upload_product where id=$_GET[id]");
	$produk=mysqli_fetch_array($query);
		echo"<form action='#' method='post' enctype='multipart/form-data' class='was-validated'>
					 <div class='input-group is-invalid'>
			<div class='custom-file'>
			  <input type='file' class='custom-file-input' id='validatedInputGroupCustomFile' name='productpost' required>
			  <label class='custom-file-label' for='validatedInputGroupCustomFile'>Pilih Gambar Produk</label>
			</div>
		  </div>	
					
		  <div class='mb-3'>
			<label for='validationTextarea'>Nama Produk</label>
			<textarea class='form-control is-invalid' name='nama' id='validationTextarea' placeholder='Nama produk harus diisi.' required>$produk[NAMA]</textarea>
		  </div>
					
		  <div class='mb-3'>
			<label for='validationTextarea'>Deskripsi Produk</label>
			<textarea class='form-control is-invalid' name='deskripsi' id='validationTextarea' placeholder='Deskripsi produk harus diisi.' required>$produk[DESKRIPSI]</textarea>
		  </div>		
					
			<div class='mb-3'>
			<div class='input-group is-invalid'>
			  <div class='input-group-prepend'>
				<label class='input-group-text' for='validatedInputGroupSelect'>Kategori</label>
			  </div>
			  <select class='custom-select' name='kategori' value='$produk[KATEGORI]' id='validatedInputGroupSelect' required>
				<option value=''>Menswear.</option>
				<option value='head'>Head</option>
				<option value='top'>Top</option>
				<option value='bottom'>Bottom</option>
				<option value='selvedge'>Selvedge denim</option>
				<option value='acc'>Accessories</option>
				<option value='bag'>Bag</option>
			  </select>
			</div>
			<div class='invalid-feedback'>
			 Wajib diisi
			</div>
		  </div>

		  <div class='mb-3'>
			<select class='custom-select' name='jumlah' value='$produk[JUMLAH]' required>
			  <option value=''>Jumlah Barang</option>
			  <option value='1'>1</option>
			  <option value='2'>2</option>
			  <option value='3'>3</option>
			  <option value='4'>4</option>
			  <option value='5'>5</option>
			  <option value='6'>6</option>
			  <option value='7'>7</option>
			  <option value='8'>8</option>
			  <option value='9'>9</option>
			  <option value='10'>10</option>
			</select>
			<div class='invalid-feedback'>Tidak dapat menjual partai besar.</div>
		  </div>
		  
		   <div class='mb-3'>
			  <label for='hargaProduk'>Brand Produk</label>
			<div class='input-group is-invalid'>
			  <input type='text' class='form-control is-invalid' name='brand' value='$produk[BRAND]' id='hargaProduk' aria-describedby='validatedInputGroupPrepend' required>
			</div>
			<div class='invalid-feedback'>
			  Wajib diisi.
			</div>
		  </div>
					
		   <div class='mb-3'>
			<select class='custom-select' name='sizing' value='$produk[SIZING]' required>
			  <option value=''>Size chart produk</option>
			  <option value='S'>S</option>
			  <option value='M'>M</option>
			  <option value='L'>L</option>
			  <option value='XL'>XL</option>
			  <option value='XXL'>XXL</option>
			  <option value='XXXL'>XXXL</option>
			</select>
			<div class='invalid-feedback'>Untuk size chart lebih lanjut bisa hubungi kontak yang tersedia.</div>
		  </div>
					
		 <div class='mb-3'>
			<div class='input-group is-invalid'>
			  <div class='input-group-prepend'>
				<label class='input-group-text' for='validatedInputGroupSelect'>Ongkir</label>
			  </div>
			  <select class='custom-select' name='ongkir' value='$produk[ONGKIR]' id='validatedInputGroupSelect' required>
				<option value=''>Pilih Opsi.</option>
				<option value='gratisOngkir'>Gratis Ongkir</option>
				<option value='sesuaiTujuan'>Sesuai Tujuan</option>
			  </select>
			</div>
			<div class='invalid-feedback'>
			 Bisa gratis ongkir menggunakan kupon ataupun meyesuaikan alamat penerima.
			</div>
		  </div>
					
		  <div class='mb-3'>
			  <label for='hargaProduk'>Harga Produk</label>
			<div class='input-group is-invalid'>
			  <input type='text' class='form-control is-invalid' name='harga' value='$produk[HARGA]' id='hargaProduk' aria-describedby='validatedInputGroupPrepend' required>
			</div>
			<div class='invalid-feedback'>
			  diisi tanpa RP
			</div>
		  </div>
					
		<label>&nbsp;</label><input type='submit' name='Send' value='Edit' class='btn btn-dark'><p>			
		</form>";
		if(isset($_POST['Send'])){
			include"penting!!.php";
			$namagambar = $_FILES['productpost']['name'];
			$tmp_name = $_FILES['productpost']['tmp_name'];
			$lokasi = "../productpost/$namagambar";
			$v2=($_POST['nama']);
			$v3=($_POST['deskripsi']);
			$v4=$_POST['kategori'];
			$v5=$_POST['jumlah'];
			$v6=$_POST['brand'];
			$v7=$_POST['sizing'];
			$v8=$_POST['ongkir'];
			$v9=$_POST['harga'];
			if(move_uploaded_file($tmp_name,$lokasi)){
			
			$update=mysqli_query($koneksidb,"update upload_product set GAMBAR='$namagambar', NAMA='$v2', DESKRIPSI='$v3', KATEGORI='$v4', JUMLAH='$v5', BRAND='$v6', SIZING='$v7', ONGKIR='$v8', HARGA='$v9' where id=$_GET[id]");
			if($update > 0)
			{
				echo"<h1>Update success</h1>";
				echo"<meta http-equiv='refresh' content='1; url=?data=etalase'>";}
			else
				echo"<h1>Update gagal</h1>";
			}
		}
	}

elseif ($_GET['data']=="hapusslider"){
		$query=mysqli_query($koneksidb,"delete from slider where id=$_GET[id]");
		if($query > 0)
		{
			echo"<h1>Data telah dihapus</h1>";
			echo"<meta http-equiv='refresh' content='1; url=?data=sliderEU'>";
		}
		else
			echo"Not Succes";
		}
}
?>	
	</div>
	</div>
	<div class="copyright text-center text-white font-weight-bold bg-secondary p-1">
		<p>
		Developed by Aryo Senoaji Copyright. <i class="far fa-copyright">2020</i>
		</p>
	</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="../../js/jquery-3.5.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../script.js"></script>
</body>
</html>