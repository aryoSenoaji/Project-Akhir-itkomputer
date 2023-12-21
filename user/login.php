<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login User</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<section class="container-fluid kotak">
	<section class="row justify-content-center">
	<section class="col-12 col col-sm-6 col-md-3">
		<form method="post" action="userlogin.php"  class="form-container">
		  <div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input type="text" class="form-control" id="exampleInputEmail1" name="user"  aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-white"></small>
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="pass" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Remind me</label>
		  </div>
			<input type="submit" class="btn btn-primary" name="send" value="Log In">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Daftar">Daftar</button>
		</form>
		</section>
	</section>	
</section>
	
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="Daftar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Daftar">Daftar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		   <form action="#" method="post">
	  <div class="form-group">
		<label for="exampleInputEmail1">Username</label>
		<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		<small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="form-group form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Keep Signed In?</label>
	  </div>
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="Send" value="Send" class="btn btn-primary">
		<?php include'daftaruser.php'; ?>
      </div>
	</form>
      </div>
    </div>
  </div>
</div>

	
	


	
	
	
	
	
	
	
	
	

	
	
	
<script src="../../js/jquery-3.5.1.slim.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>	
</body>
</html>