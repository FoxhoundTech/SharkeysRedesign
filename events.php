<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once("se_db_password.php"); 
	require_once("utils.php");
	$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");
	$title = "Events";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="sharkeys.css" type='text/css'>
	</head>
	<body>
		<?php require_once("navbar.php"); ?>
		
		<div class='content'>
			<div class="header">
				<h1>Sharkey's Wing and Rib Joint!</h1>
				<h2>Events</h2>
			</div>
			
			<div class='event-info'>
				<h4>Celebrate your next big event at Sharkey's Up Top!</h4>
				<p>Looking for a unique space for your big event?
				Sharkey's Up Top Event Venus has everything you need!
				We have over 5,000 square feet of space with an occupancy for 250 people. With a full bar,
				a DJ booth, and plenty of open space, Sharkey's Up Top can be transformed to fit your every need.
				Available for rent any day! (except Thursday night)</p>
				<p>For more information about hosting an event at Sharkey's Up Top Event Venue, please contact
				Stephanie Rogol(STROGOL@aol.com) or fill out our online application!</p>
				
				<h4>Weekly events</h4>
				<h5>Party Up Top</h5>
				<h6>Every Thursday</h6>
				<p>Join us on Thursdays for Party Up Top! Featuring DJ Suds with a mix of Hip Hop, Pop, and Throwback Jams!
				Doors open at 7:30. No Cover Charge! 21+
				Free pool all day every Thursday!</p>
			</div>
			
			<div id="calendar">
			</div>
			
			<div class='event-app'>
			</div>
		</div>
		
		<script>
			function updateNavbar() {
				document.getElementById('events').className += " active";
			}
			
			updateNavbar();
		</script>
		
		<?php require_once("footer.php"); ?>
	</body>
</html>