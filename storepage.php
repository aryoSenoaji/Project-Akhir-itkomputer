<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="APANIH">
<meta name="description" content="website baru">
<title>Store</title>
	<style>
		section {
			min-height: 430px;
		}
	</style>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="stylecss2.css">
	<link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
</head>

<body>
	
	<header id="navbar" class="navbar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<h4><i class="fas fa-shopping-cart text-white mr-3"></i></h4>
	  <a class="navbar-brand font-weight-bold active text-light" href="newwebsite.php">Retro Store</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto mr-4">
		  <li class="nav-item active">
			<a class="nav-link active text-light" href="landingpage.php">Home <span class="sr-only">(current)</span></a>
		  </li>
			 <li class="nav-item active">
			<a class="nav-link active text-light" href="#">Store <span class="sr-only">(current)</span></a>
		  </li>
			 <li class="nav-item active">
			<a class="nav-link active text-light" href="portfoliopage.php">Portfolio <span class="sr-only">(current)</span></a>
		  </li>
			<li class="nav-item active">
			<a class="nav-link active text-light" href="contactus.php">Contact Us <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		  <div class="icon text-white mt-2">
		  <h5><i class="far fa-envelope ml-3 mr-3" data-toggle="tooltip" title="Messages"></i>
			  <i class="far fa-bell mr-3" data-toggle="tooltip" title="Notifications"></i>
			  <a href="user/login.php"><i class="fas fa-sign-in-alt text-white mr-3" data-toggle="tooltip" title="Login"></i></a>			  
			  </h5>
		  </div>
	  </div>
		</div>
	</nav>
</header>		
		
	
<section id="carousel" class="carousel">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="img/retro2.jpg" class="d-block w-100" alt="...">
			</div>
			  <?php
			  	include"../penting!!.php";
		$tampil = mysqli_query($koneksidb, "select * from slider");
		while($slider = mysqli_fetch_array($tampil))
					{
			echo"<div class='carousel-item'>
			  <img src='admin/img/$slider[GAMBAR]' class='d-block w-100' alt='...'>
			</div>";
				} 
			  ?>
			  
			<div class="carousel-item">
			  <img src="img/retro1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			  <img src="img/retro3.jpg" class="d-block w-100" alt="...">
			</div>
			  <div class="carousel-item">
			  <img src="img/baru.png" class="d-block w-100" alt="...">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
</section>
	
	
			<section id="brand" class="brand bg-light pb-2">
			<div class="container">
		<div class="row mb-3 pt-3">
		<div class="col text-center">
		<h1>In Associate</h1>
		</div>
		</div>
		
		<div class="row mb-2 justify-content-center">
			<div class="col-md">
				<div class="card">
	  <img src="img/brand1.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand2.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand3.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand7.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand8.png" class="card-img-top" alt="...">
	</div>
		</div>
		</div>
		
		<div class="row mb-5">
			<div class="col-md">
				<div class="card">
	  <img src="img/brand4.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand5.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand6.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand9.png" class="card-img-top" alt="...">
	</div>
		</div>
			<div class="col-md">
				<div class="card">
	  <img src="img/brand10.png" class="card-img-top" alt="...">
	</div>
		</div>
		</div>
	</div>
	</section>
	
	
	<section id="menu" class="menu">
		<div class="row no-gutters">
	<div class="col-md-2 bg-light pb-4">
		<ul class="list-group list-group-flush p-2">
		  <li class="list-group-item bg-dark text-white"><i class="fas fa-list mr-2"></i>CATEGORY</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>TOPS</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>BOTTOMS</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>OUTWEARS</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>ACCECORIES</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>BOOTS</li>
		</ul>	
			</div>
			
	<div class="col-md-10">
		<h4 class="text-center font-weight-bold text-uppercase mt-3 mb-4">New Product</h4>
	<div class="row">
		<div class="col-md ml-3 mt-2">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk3.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">Carnivoressoul Denim 'Kaiser' 19 Oz</h5>
				<p class="card-text">Denim Jeans 19 Oz Twin Indigo Selvedge</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk1" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 1.080.000</a>
			  </div>
			</div>
		</div>
			<div class="col-md ml-3 mt-2">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk2.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">Carnivoressoul Denim 'Ripper' 14 Oz</h5>
				<p class="card-text">Denim Jeans 14 Oz Twin Indigo Selvedge</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk2" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 780.000</a>
			  </div>
			</div>
		</div>
			<div class="col-md ml-3 mt-2">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk7.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">Carnivores Soul x Wall of Fades</h5>
				<p class="card-text">Denim Jacket 15 Oz Indigo</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk3" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 680.000</a>
			  </div>
			</div>
		</div>
			<div class="col-md ml-3 mt-4">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk4.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">RaceCat Belt Leather Belt Natural</h5>
				<p class="card-text">Leather Belt Single Prong</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk4" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 320.000</a>
			  </div>
			</div>
		</div>
			<div class="col-md ml-3 mt-4">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk1.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">Mischief Bandana (01)</h5>
				<p class="card-text">Mischief Bandana 25x25 With Indigo Colour</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk5" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 99.000</a>
			  </div>
			</div>
		</div>
			<div class="col-md ml-3 mt-4">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk6.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">Bedrock Horween Chromexcel </h5>
				<p class="card-text">(Pre-Order) With Horse Butt Strip</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk6" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 4.510.000</a>
			  </div>
			</div>
		</div>
			<div class="col-md ml-3 mt-4">
					<div class="card" style="width: 18rem;">
			  <img src="img/produk5.png" class="card-img-top" alt="...">
			  <div class="card-body bg-light">
				<h5 class="card-title">Vessel VIII Americana</h5>
				<p class="card-text">American Natural Vegetable Tanned Cowhide</p>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i><br>
				<a href="#" class="btn btn-dark" data-target="#produk7" data-toggle="modal">Details</a>
				<a href="#" class="btn btn-danger">Rp. 1.049.000</a>
			  </div>
			</div>
		</div>
		<?php
		include"../penting!!.php";
		$tampil = mysqli_query($koneksidb, "select * from upload_product");
		while($produk = mysqli_fetch_array($tampil))
					{
			echo"<div class='col-md ml-3 mt-4'>
				<div class='card' style='width: 18rem;''>
			  <img src='productpost/$produk[GAMBAR]' class='card-img-top' alt='...'>
			  <div class='card-body bg-light'>
				<h5 class='card-title'>$produk[NAMA]</h5>
				<p class='card-text'>$produk[DESKRIPSI]</p>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star-half-alt text-warning'></i><br>
				<a href='#' class='btn btn-dark' data-target='$produk[ID]' data-toggle='modal'>Details</a>
				<a href='#' class='btn btn-danger'>Rp. $produk[HARGA]</a>
			  </div>
			</div>
		</div>";
		}
		?>
		
		
	</div>
		</div>		
			</div>
		
		<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk3.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Denim (Jeans)</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Carnivoressoul</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>27-40</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Heavyweight Denim, 19 Oz</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Gratis Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 1.080.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk2.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Denim (Jeans)</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Carnivoressoul</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>27-40</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Middle-Weight Denim, 14 Oz</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Gratis Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 780.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk7.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Denim (Jacket)</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Carnivoressoul</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>S-XXL</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Middle-Weight Denim, 15 Oz</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Gratis Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				 <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 680.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk4.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Leather (Belt)</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Carnivoressoul</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>30-38</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Natural Vegtan Leather</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Gratis Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 320.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk1.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Bandana</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Mischief</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>28-36</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Indigo Colour Natural</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Gratis Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 99.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk3.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Denim (Jeans)</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Carnivoressoul</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>27-40</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Heavyweight Denim, 19 Oz</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Gratis Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i><br>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 1.080.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk6.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Bedrock Horween Chromexcel</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Sagara</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>All</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>Leather (With Horse Butt Strip)</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Pre-Order</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Ditanggung Pembeli</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  <i class="far fa-star text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 4.510.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
		
		<div class="modal fade" id="produk7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
		  <div class="col-md-6">
		  <img src="img/produk5.png">
		  </div>
		  <div class="col-md-6">
		  <table class="table table-borderless">
			  	<tr>
			  <th>Nama Produk</th>
			  <td>Vessel VIII Americana</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>Voyej</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>L-XL</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>American Natural Vegetable Tanned Cowhide</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>Ready Stock</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>Free Ongkir!!</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star text-warning"></i>
				  <i class="fas fa-star-half-alt text-warning"></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. 1.049.000</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>
	</section>
	
	<footer>
	<div class="row bg-dark text-white p-5">
		<div class="col-md-3">
			<h5>CUSTOMER SERVICE</h5>
			<ul>
				<li>FAQ</li>
				<li>HOW TO BUY?</li>
				<li>DELIVERY PRODUCT?</li>
				<li>HOW TO RETURN?</li>
			</ul>
		</div>
		<div class="col-md-3">
		<h5>ABOUT US</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, quas, soluta sapiente labore dolor, optio rem ipsa voluptatibus autem repellendus quasi, sint dolorem. Repellendus perspiciatis, ad quasi quis, non aliquam.</p>
		</div>
		<div class="col-md-3">
		<h5>PARTNER</h5>
			<ul>
				<li>SAGESEESMORE</li>
				<li>CARNIVORESSOUL</li>
				<li>AYE DENIM</li>
				<li>ELHAUS</li>
				<li>PMP DENIM</li>
				<li>VOYEJ</li>
				<li>SAGARA</li>
			</ul>
		</div>
		<div class="col-md-3">
		<h5>CONTACT US</h5>
			<ul>
				<li>(021) 8706052</li>
				<li>(021) 5159287</li>
				<li>aryosenoaji877@gmail.com</li>
			</ul>
		</div>
		</div>
	</footer>
	
	<div class="copyright text-center text-white font-weight-bold bg-secondary p-2">
		<p>
		Developed by Aryo Senoaji Copyright. <i class="far fa-copyright">2020</i>
		</p>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="../js/jquery-3.5.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</body>
</html>