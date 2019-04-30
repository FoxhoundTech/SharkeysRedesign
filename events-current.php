<?php
	error_reporting(e_all);
	require_once("se_db_password.php"); 
	require_once("utils.php");
	require_once("sharkeys-constants.php");
	global $foodAllowed;
	$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		events manager
	*/
	$title="Manage Events";
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
			session_start();
			if(!(isset($_SESSION["SharkLogged"]) && !empty($_SESSION["SharkLogged"]))) {
				header("Location: ./admin.php");
			}
		
			$id = mysqli_real_escape_string($connect, $_GET['id']);
			$SQLcmd = "SELECT * FROM events WHERE id='$id'";
			$results = mysqli_query($connect, $SQLcmd);
			while ($row=mysqli_fetch_assoc($results)) {
				$contact = $row['contact'];
				$type = $row['type'];
				$phone = $row['phone'];
				$date = $row['date'];
				$email = $row['email'];
				$guests = $row['guests'];
				$comments = $row['comments'];
			}
			if (!$results) { echo "<br/><br/><br/><br/><h3>There doesn't seem to be an event like that.</h3>";  }
			else {		
			
		?>
		
		<div class="pt-5 pb-5"></div>
		<div class="card col-md-3 mx-auto shadow">
			<div class="card-header">
				<strong>Manage Event: <?php echo htmlspecialchars($id); ?></strong>
			</div>
			<div class="card-body">
				<form action="events-cancel.php" method="post">
					<div class="form-group">
						<div class="form-row">
							<input type="text" hidden="hidden" id="id" name="id" value="<?php echo htmlspecialchars($id); ?>">
							<label for="contact">Point of Contact:</label>
							<input type="text" class="form-control" id="contact" name="contact" value="<?php echo htmlspecialchars($contact); ?>" readonly="readonly">
							<label for="type">Event Type:</label>
							<input type="text" class="form-control" id="type" name="type" value="<?php echo htmlspecialchars($type); ?>" readonly="readonly">
						</div>
						<div class="form-row">
							<label for="phone">Phone</label>
							<input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" readonly="readonly">
							<label for="date">Date:</label>
							<input type="text" class="form-control" id="date" name="date" value="<?php echo htmlspecialchars($date); ?>" readonly="readonly">
						</div>
						<div class="form-row">
							<label for="email">Email:</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly="readonly">
							<label for="guests">Guests:</label>
							<input type="number" class="form-control" id="guests" name="guests" value="<?php echo htmlspecialchars($guests); ?>" readonly="readonly">
						</div>
						<div class="form-row">
							<label for="comments">Comments:</label>
							<textarea class="form-control" id="comments" name="comments" rows="10" readonly="readonly"><?php echo htmlspecialchars($comments); ?></textarea>
						</div>
						<div class="text-center mt-2">
						<div class="btn-group">
							<input class="form-control btn btn-primary" type="submit" id="cancel" name="cancel" value="Cancel Event"/>
						</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<?php 
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