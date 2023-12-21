<link rel="stylesheet" href="../../css/bootstrap.min.css">

<form action="#" method="post" enctype="multipart/form-data" class="was-validated">
<label class="sr-only" for="inlineFormInputName2">Judul</label>
<input type="text" name="nama" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nama">
  <div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="img" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Update Slider Toko</div>
  </div>
	<p><label>&nbsp;</label><input type="submit" name="Send" value="Send" class="btn btn-dark">
</form>

<?php 
if(isset($_POST['Send'])){
	include"penting!!.php";
	$gambar = $_FILES['img']['name'];
	$tmp_name = $_FILES['img']['tmp_name'];
	$lokasi = "img/$gambar";
	$nama=$_POST['nama'];

	
if(move_uploaded_file($tmp_name,$lokasi))
{
	$input = mysqli_query($koneksidb,"insert into slider values (null,'$nama','$gambar')");
	
if($input > 0)
	echo"<script>alert('Success')</script>";
else
	echo"<h1>Input Gagal</h1>";
}
}
?>