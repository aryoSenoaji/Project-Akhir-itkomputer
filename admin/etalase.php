<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.min.css">
<?php
include"penting!!.php";
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
				<a href='?data=hapusproduk&id=$produk[ID]' class='btn btn-dark'>HAPUS</a>
				<a href='?data=editproduk&id=$produk[ID]' class='btn btn-danger'>EDIT</a>
			  </div>
			</div>
		</div>";}
		
?>