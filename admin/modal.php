<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modal</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">	
	<link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css">
	<style>
	body{
		overflow-x: hidden;
	}
</style>
</head>
<body>
	<?php
include"../../penting!!.php";
$tampil = mysqli_query($koneksidb, "select * from upload_product");
while($produk = mysqli_fetch_array($tampil))
{
echo"<div class='col-md ml-3 mt-4'>
				<div class='card' style='width: 18rem;''>
			  <img src='../productpost/$produk[GAMBAR]' class='card-img-top' alt='...'>
			  <div class='card-body bg-light'>
				<h5 class='card-title'>$produk[NAMA]</h5>
				<p class='card-text'>$produk[DESKRIPSI]</p>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star-half-alt text-warning'></i><br>
				<a href='#' class='btn btn-dark' data-target='#$produk[ID]' data-toggle='modal'>Details</a>
				<a href='#' class='btn btn-danger'>Rp. $produk[HARGA]</a>
			  </div>
			</div>
		</div>
<div class='modal fade' id='$produk[ID]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Deskripsi Produk</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <div class='row'>
		  <div class='col-md-6'>
		  <img src='$produk[GAMBAR]'>
		  </div>
		  <div class='col-md-6'>
		  <table class='table table-borderless'>
			  	<tr>
			  <th>Nama Produk</th>
			  <td>$produk[NAMA]</td>
			  	</tr>
			  	<tr>
			  <th>Brand</th>
			  <td>$produk[BRAND]</td>
			  	</tr>
			  	<tr>
			  <th>Sizing</th>
			  <td>$produk[SIZING]</td>
			  	</tr>
			  	<tr>
			  <th>Spesifikasi</th>
			  <td>$produk[DESKRIPSI]</td>
			  	</tr>
			  <tr>
			  <th>Stok</th>
			  <td>$produk[JUMLAH]</td>
			  	</tr>
			  	<tr>
			  <th>Ongkir</th>
			  <td>$produk[ONGKIR]</td>
			  	</tr>
			  <tr>
			  <th>Rating Produk</th>
			  <td>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star text-warning'></i>
				  <i class='fas fa-star-half-alt text-warning'></i>
				  <i class='far fa-star text-warning'></i>
				  </td>
			  	</tr>
			  <tr>
			  <th>Harga</th>
			  <td>Rp. $produk[HARGA]</td>
			  	</tr>
			  </table>
		  		</div>
			</div>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-dark' data-dismiss='modal'>Back</button>
        <button type='button' class='btn btn-danger'>Buy</button>
      </div>
    </div>
  </div>
</div>";}
?>

	
	
	
	
	
	
<script src="../../js/jquery-3.5.1.slim.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>





