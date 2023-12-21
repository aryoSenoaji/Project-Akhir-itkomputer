<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.min.css">
<?php
include"penting!!.php";
$tampil = mysqli_query($koneksidb, "select * from slider");
while($sliderEU = mysqli_fetch_array($tampil))
{
echo"<div class='card m-3' style='width: 18rem;''>
  <img src='img/$sliderEU[GAMBAR]' class='card-img-top' alt='...'>
  <div class='card-body'>
    <p class='card-text'>$sliderEU[NAMA]</p>
		<a href='?data=hapusslider&id=$sliderEU[ID]' class='btn btn-dark'>HAPUS</a>
  </div>
</div>";}
		
?>