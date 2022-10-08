<?php

require 'Classes\LogoutController.php';
if(isset($_POST['logout'])){
	$logout = new LogoutController;
	$logout->Logout();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Here</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	
</head>
<body class="">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: -10px;">
			<div class="col-4">								
                <form method="post" action="administrator.php">
                        
                        <div class="input-group" style="margin-top: 20px;">
                        <h3 style="position:relative;text-align:center;color:white;">Thanks for you</h3>
                        <input type="submit" name="logout" value="EXIT" class="btn btn-outline-light btn-block" style="background-color:transparent;color:white;position:relative;margin-left:150px;top:50px;height:35px;width:50px;border-radius:5px;">
                        <h3 style="position:relative;text-align:center;color:white;top:190px;color:grey;font-size:15px;">TEAM20Community</h3>	
                    </div>	
                </form>									
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>