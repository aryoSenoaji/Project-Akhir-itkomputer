<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
<style>
		body {
			overflow-x: hidden;
}
</style>
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
			<a class="nav-link active text-light" href="newwebsite.php">Home <span class="sr-only">(current)</span></a>
		  </li>
			 <li class="nav-item active">
			<a class="nav-link active text-light" href="#">Store <span class="sr-only">(current)</span></a>
		  </li>
			 <li class="nav-item active">
			<a class="nav-link active text-light" href="newwebsite3.php">Portfolio <span class="sr-only">(current)</span></a>
		  </li>
			 <li class="nav-item active">
			<a class="nav-link active text-light" href="#">Services <span class="sr-only">(current)</span></a>
		  </li>
			 <li class="nav-item active">
			<a class="nav-link active text-light" href="newwebsite4.php">Contact Us <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		  <div class="icon text-white mt-2">
		  <h5><i class="far fa-envelope ml-3 mr-3" data-toggle="tooltip" title="Messages"></i>
			  <i class="far fa-bell mr-3" data-toggle="tooltip" title="Notifications"></i>
			  </h5>
		  </div>
	  </div>
		</div>
	</nav>
</header>		
	
<section id="menu" class="menu">
		<div class="row no-gutters">
	<div class="col-md-2 bg-light pb-4 mt-5">
		<ul class="list-group list-group-flush p-2">
		  <li class="list-group-item bg-dark text-white"><i class="fas fa-list mr-2"></i>DETAILS</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>UPLOAD PRODUCT</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>PACKAGE DETAILS</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>PAYMENT METHODS</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>COURIER</li>
		  <li class="list-group-item"><i class="fas fa-angle-right mr-2"></i>VERIFICATION</li>
		</ul>	
			</div>
			
			<div class="col-md-10 mt-2">
				<div class="col text-center mt-5">
				<h1>UPLOAD PRODUCT</h1>
				</div>
				<form action="#" method="post" enctype="multipart/form-data" class="was-validated">
					 <div class="input-group is-invalid">
			<div class="custom-file">
			  <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" name="productpost" required>
			  <label class="custom-file-label" for="validatedInputGroupCustomFile">Pilih Gambar Produk</label>
			</div>
		  </div>	
					
		  <div class="mb-3">
			<label for="validationTextarea">Nama Produk</label>
			<textarea class="form-control is-invalid" name="nama" id="validationTextarea" placeholder="Nama produk harus diisi." required></textarea>
		  </div>
					
		  <div class="mb-3">
			<label for="validationTextarea">Deskripsi Produk</label>
			<textarea class="form-control is-invalid" name="deskripsi" id="validationTextarea" placeholder="Deskripsi produk harus diisi." required></textarea>
		  </div>		

					
			<div class="mb-3">
			<div class="input-group is-invalid">
			  <div class="input-group-prepend">
				<label class="input-group-text" for="validatedInputGroupSelect">Kategori</label>
			  </div>
			  <select class="custom-select" name="kategori" id="validatedInputGroupSelect" required>
				<option value="">Menswear.</option>
				<option value="head">Head</option>
				<option value="top">Top</option>
				<option value="bottom">Bottom</option>
				<option value="selvedge">Selvedge denim</option>
				<option value="acc">Accessories</option>
				<option value="bag">Bag</option>
			  </select>
			</div>
			<div class="invalid-feedback">
			 Wajib diisi
			</div>
		  </div>

		  <div class="mb-3">
			<select class="custom-select" name="jumlah" required>
			  <option value="">Jumlah Barang</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			</select>
			<div class="invalid-feedback">Tidak dapat menjual partai besar.</div>
		  </div>
		  
		   <div class="mb-3">
			  <label for="hargaProduk">Brand Produk</label>
			<div class="input-group is-invalid">
			  <input type="text" class="form-control is-invalid" name="brand" id="hargaProduk" aria-describedby="validatedInputGroupPrepend" required>
			</div>
			<div class="invalid-feedback">
			  Wajib diisi.
			</div>
		  </div>
					
		   <div class="mb-3">
			<select class="custom-select" name="sizing" required>
			  <option value="">Size chart produk</option>
			  <option value="S">S</option>
			  <option value="M">M</option>
			  <option value="L">L</option>
			  <option value="XL">XL</option>
			  <option value="XXL">XXL</option>
			  <option value="XXXL">XXXL</option>
			</select>
			<div class="invalid-feedback">Untuk size chart lebih lanjut bisa hubungi kontak yang tersedia.</div>
		  </div>
					
		 <div class="mb-3">
			<div class="input-group is-invalid">
			  <div class="input-group-prepend">
				<label class="input-group-text" for="validatedInputGroupSelect">Ongkir</label>
			  </div>
			  <select class="custom-select" name="ongkir" id="validatedInputGroupSelect" required>
				<option value="">Pilih Opsi.</option>
				<option value="gratisOngkir">Gratis Ongkir</option>
				<option value="sesuaiTujuan">Sesuai Tujuan</option>
			  </select>
			</div>
			<div class="invalid-feedback">
			 Bisa gratis ongkir menggunakan kupon ataupun meyesuaikan alamat penerima.
			</div>
		  </div>
					
		  <div class="mb-3">
			  <label for="hargaProduk">Harga Produk</label>
			<div class="input-group is-invalid">
			  <input type="text" class="form-control is-invalid" name="harga" id="hargaProduk" aria-describedby="validatedInputGroupPrepend" required>
			</div>
			<div class="invalid-feedback">
			  diisi tanpa RP
			</div>
		  </div>
					
		<label>&nbsp;</label><input type="submit" name="Send" value="Send" class="btn btn-dark"><p>			
		</form>
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
<?php include 'php(4).php';?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="../js/jquery-3.5.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="script.js"></script>
</body>
</html>