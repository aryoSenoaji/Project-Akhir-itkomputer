<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.min.css">
<?php
include"penting!!.php";
$tampil = mysqli_query($koneksidb, "select * from meta");
while($meta = mysqli_fetch_array($tampil))
{
echo"<form class='m-2' action='#' method='post'>
  <div class='form-group'>
    <label for='exampleFormControlTextarea1'>Update Tittle</label>
    <textarea class='form-control' name='tittle' id='exampleFormControlTextarea1' rows='3'>$meta[TITTLE]</textarea>
  </div>
  <div class='form-group'>
    <label for='exampleFormControlTextarea1'>Update Description</label>
    <textarea class='form-control' name='description' id='exampleFormControlTextarea1' rows='3'>$meta[DESCRIPTION]</textarea>
  </div>
  <div class='form-group'>
    <label for='exampleFormControlTextarea1'>Update Keywords</label>
    <textarea class='form-control' name='keyword' id='exampleFormControlTextarea1' rows='3'>$meta[KEYWORD]</textarea>
  </div>
  <a href='?data=editmeta&id=$meta[ID]' class='btn btn-dark'>EDIT</a>
</form>";}
		
?>