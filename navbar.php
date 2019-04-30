<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
	</head>
	
	<body>
		<div class="topnav" id="myTopnav">
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
			<?php
			session_start();
			if(isset($_SESSION["SharkLogged"]) && !empty($_SESSION["SharkLogged"])) {
				echo "<a id='logout' href='logout.php'>Log Out</a>";
			}
			?>
			<a id='location' href="locations.php">Locations</a>
			<a id='events' href="events.php">Events</a>
			<a id='specials' href="specials.php">Specials</a>
			<a id='drink' href="drink-menu.php">Drinks</a>
			<a id='admin' href="admin.php">Admin</a>
			<a id='menu' href="menu.php">Menu</a>
			<a id='home' href="index.php">Home</a>
		</div>
	</body>
</html>
