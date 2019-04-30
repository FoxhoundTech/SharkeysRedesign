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
			require_once("navbar.php"); 
			if(!(isset($_SESSION["SharkLogged"]) && !empty($_SESSION["SharkLogged"]))) {
				header("Location: ./admin.php");
			}
		?>
			
		<div class="pt-5 pb-5"></div> <!--Extra Padding-->
		<div class="container pt-5" id="admin-cards">
			<div class="row">
				<div class="card text-center col mr-2">
					<div class="card-header">
						Menu
					</div>
					<div class="card-body">
						<p class="card-text">Add, delete, and update items on the menu</p>
						<a href="menu-modify.php" class="btn btn-primary">Manage Menu</a>
					</div>
				</div>
				<div class="card text-center col-6 mr-2">
					<div class="card-header">
						Events
					</div>
					<div class="card-body">
						<p class="card-text">Approve/deny reservation requests, modify existing events, or schedule new events.   </p>
						<a href="events-manage.php" class="btn btn-primary">Manage Events</a>
					</div>
				</div>
				<div class="card text-center col">
					<div class="card-header">
						Specials
					</div>
					<div class="card-body">
						<p class="card-text">Modify daily and weekly specials</p>
						<a href="specials-manage.php" class="btn btn-primary">Manage specials</a>
					</div>
				</div>
			</div>
		</div>
	
		
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