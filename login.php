<?php
require("controller/includer.php");

require("controller/userlogin.php");
if (logged_in()) {
	redirect_to("/admin/dashboard");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'?>
	<link rel="stylesheet" href="style/css/login.css">
	<title>Login | Nordic Telematics</title>
</head>

<header>
        <?php include 'includes/nav.php'?>
    </header>
<body>		 
	<section class="main">
    <div class="login">
		<div class="login__banner">
			<h1>Admin Login</h1> 
    </div>
    <div class="login__form">
				<form action="" method="post">
				<label for="user">USERNAME</label><br>
				<input type="text" name="user" maxlength="30" value="" /><br>
				<label for="pass">PASSWORD</label><br>
				<input type="password" name="pass" maxlength="30" value="" /><br>
				<input type="submit" name="submit" value="Login" />
				</form>
    </div>
    </div>
	</section>
</body>
</html>	
<?php 
if (isset($conn)){mysqli_close($conn);}
?>