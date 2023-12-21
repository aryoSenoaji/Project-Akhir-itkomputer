<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="cs.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
	 <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>
  <body>

    <!--alert messages start
    <div class="alert-success">
      <span>Message Sent! Thank you for contacting us.</span>
    </div>
    <div class="alert-error">
      <span>Something went wrong! Please try again.</span>
    </div>
    alert messages end-->

    <!--header nya nih-->
	  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
	  <div class="container">
			<a class="navbar-brand active text-light" href="landingpage.php">Retro Store</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
			<a class="nav-link active text-light" href="landingpage.php">Home</a>
			</li>
			<li class="nav-item active">
			<a class="nav-link active text-light" href="storepage.php">Store</a>
			</li>
			<li class="nav-item active">
			<a class="nav-link active text-light" href="portfoliopage.php">Portfolio</a>
			</li>
			<li class="nav-item active">
			<a class="nav-link active text-light" href="#">Contact Us</a>
			</li>
			<li>
					<a href="https://twitter.com/rakyatjelatabos">
					<i class="fab fa-twitter text-white ml-3 mt-2"></i></a>
				</li>
				<li>
				<a href="https://www.facebook.com/iyorji">
					<i class="fab fa-facebook text-white ml-3 mt-2"></i></a>
				</li>
				<li>
				<a href="user/login.php">
					<i class="fas fa-sign-in-alt text-white ml-3 mt-2"></i></a>
				</li>
		</ul>
	  </div>
		</div>
</nav>
	  
	  <!--konten nya-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Jalan Rukun Raya No. 37, Jakarta Timur</div>
        <div><i class="fas fa-envelope"></i>aryosenoaji877@gmail.com</div>
        <div><i class="fas fa-phone"></i>+62 877 4840 5361</div>
        <div><i class="fas fa-clock"></i>Senin - Jum'at 08.00 s.d. 17.00 </div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="nama" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea type="text" name="pesan" rows="5" placeholder="Your Message" required></textarea>
		  <label>&nbsp;</label><input class="btn btn-primary" type="submit" name="Send" value="Send">
        </form>
      </div>
    </div>
    <!--konten abis-->

  </body>
</html>

<?php 
if(isset($_POST['Send'])){
	include"../penting!!.php";
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$pesan=$_POST['pesan'];
	$input = mysqli_query($koneksidb,"insert into contact values (null,'$nama','$email','$pesan')");
	
if($input > 0)
	echo"<script>alert('Pesan Terkirim')</script>";
else
	echo"<h1>Input Gagal</h1>";
}
?>
                           