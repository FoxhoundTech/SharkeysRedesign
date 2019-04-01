<?php
	error_reporting(e_all);
	require_once("se_db_password.php"); 
	require_once("utils.php");
	require_once("sharkeys-constants.php");
	global $foodAllowed;
	$connect = mysqli_connect("localhost", "jkolts", $mysql_password, "jkolts");
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		Menu-Modify Page
	*/
	$title="Specials";
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
		<?php require_once("navbar.php"); ?>
		<div class="mt-5 pt-5 mb-5"></div>
		<h1 class="text-center" style="color: white">Specials</div>
		<div class="container mt-5 mb-5" style="color: black">

		
			<?php
				$SQLcmd = "SELECT * FROM specials";
				$results = mysqli_query($connect, $SQLcmd);
				while( $row=mysqli_fetch_assoc($results)) {
						echo specialCards($row['name'], $row['type'], $row['price'], $row['description'], $row['url']);
				}
			?>
			
		</div>
	
		<?php 
			mysqli_close($connect); 
			require_once("footer.php");
		?>
		<script>
			function updateNavbar() {
				document.getElementById('specials').className += " active";
			}
			
			updateNavbar();
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>