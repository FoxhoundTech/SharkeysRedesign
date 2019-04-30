<?php
	session_start();
	error_reporting(e_all);
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		Admin-Handle Page
	*/
	$title="Admin Control Panel";
?><!DOCTYPE html>

<html>
	<head>	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> <?php echo $title ?> </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="sharkeys.css">
	</head>
	<body>
		<?php
			if((isset($_POST['username']) && isset($_POST['password']))) {
				$user = $_POST['username'];
				$pass = $_POST['password'];
				
			} else {
				header("Location: ./admin.php");
				die();
			}
			
			require_once("se_db_password.php"); 
			$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");

			if (mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }
			
			//Fetch 
			$SQLcmd = "SELECT * FROM Login WHERE username = '$user'";
			$results = mysqli_query($connect,$SQLcmd); 
			$row=mysqli_fetch_assoc($results);
			
			$db_username = $row['username'];
			$db_password = $row['password'];
			
			//If Password and username is correct
			if (($user === $db_username && $pass === $db_password)) {
				$_SESSION["SharkLogged"] = "True";
				header("Location: ./admin-menu.php");
			}
			else {
				mysqli_close($connect);	
				header("Location: ./admin.php"); //Return to Login page if incorrect username/pw
				exit();
			}
			
			mysqli_close($connect);
		?>
		
		<script>
			function updateNavbar() {
				document.getElementById('admin').className += " active";
			}
			
			updateNavbar();
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>