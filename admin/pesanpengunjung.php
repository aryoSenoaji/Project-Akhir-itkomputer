<link rel="stylesheet" href="../../css/bootstrap.min.css">

<?php
include"penting!!.php";
$tampil = mysqli_query($koneksidb, "select * from contact");
while($produk = mysqli_fetch_array($tampil)){
echo"
<form>
  <div class='form-group row'>
    <label for='staticEmail' class='col-sm-2 col-form-label'>Nama:</label>
    <div class='col-sm-10'>
      <input type='text' readonly class='form-control-plaintext' id='staticEmail' value='$produk[NAMA]'>
    </div>
  </div>
  <div class='form-group row'>
    <label for='staticEmail' class='col-sm-2 col-form-label'>Email:</label>
    <div class='col-sm-10'>
      <input type='text' readonly class='form-control-plaintext' id='staticEmail' value='$produk[EMAIL]'>
    </div>
  </div>
  <div class='form-group row>
    <label for='exampleFormControlTextarea1'>Pesan Pembeli:</label>
    <textarea class='form-control' id='exampleFormControlTextarea1' rows='3'>$produk[PESAN]</textarea>
  </div>
</form>";}
?>