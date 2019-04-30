<?php
	error_reporting(e_all);
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		Admin Login Page	
	*/
	$title="admin";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> <?php echo $title;; ?> </title>
		<link rel="stylesheet" type="text/css" href="sharkeys.css">
		<meta charset="utf-8" />
	</head>
	<body>
		<?php require_once("navbar.php"); 
			session_start();
			if(isset($_SESSION["SharkLogged"]) && !empty($_SESSION["SharkLogged"])) {
				header("Location: ./admin-handle.php");
			}
		?>
		<div class="login">
			<h3>Login:</h3>
			<form action="admin-handle.php" method='post'>
				<p>Username: <input type='text' width='15' name='username' id='username' /></p>
				<p>Password: <input type='password' width='15' name='password' id='password' /></p>
				<input type='submit' name='login-form' />
			</form>
		</div>
		
		<script>
			function updateNavbar() {
				document.getElementById('admin').className += " active";
			}
			
			updateNavbar();
		</script>
	</body>
</html>