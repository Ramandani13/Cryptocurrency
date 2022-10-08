<?php
require 'Classes\RegisterController.php';
session_start();

// membuat 1 konsidi dengan statement if ,jika tombol submit /register di klik maka script di dalam statement akan dieksekusi
if(isset($_POST['submit'])){
	// kita buat object baru dari clas registercontroler yg telah kita buat ,
	// dan saya akan meamnggil method get data yg ada pada clas registercontroller
	$register = new RegisterController;
	$register->getData($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm-password']);
}
// membuat pesan error akan ditampilkan jika ada eror
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register Here</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 20px;">
			<div class="col-4">	
				<?php
					if(isset($_POST['submit'])){
						echo "<div class='alert alert-danger text-center' role='alert'>
							'".$register->message."'
							</div>";
					}
				?>
				<h1 class="login-text" style="font-size: 2rem; font-weight: 800;">Register Here!</h1>
				<form method="post" action="register.php" class="login-email">
					<div class="input-group">
						<input type="text" name="name" placeholder="Name" class="form-control">
					</div>

					<div class="input-group">
						<input type="email" name="email" placeholder="Email" class="form-control">
					</div>

					<div class="input-group">
						<input type="password" name="password" placeholder="Password" class="form-control">
					</div>
					<div class="input-group">
						<input type="password" name="confirm-password" placeholder="Password" class="form-control">
					</div>
					<div class="input-group">
					<input type="submit" name="submit" value="Register" class="btn btn-outline-light btn-block">
					</div>
				</form>
				<div class="text-center">
					
					<p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>