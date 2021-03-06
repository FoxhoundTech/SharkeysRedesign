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
		
		Event Manager sub Page
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
			
			$name = mysqli_real_escape_string($connect, $_GET['name']);
			$SQLcmd = "SELECT * FROM specials WHERE name='$name'";
			$results = mysqli_query($connect, $SQLcmd);
			while ($row=mysqli_fetch_assoc($results)) {
				$type = $row['type'];
				$price = $row['price'];
				$description = $row['description'];
				$url = $row['url'];
			}
			if (!$results) { echo "<br/><br/><br/><br/><h3>There doesn't seem to be a special like that.</h3>";  }
			else {	
		?>
		<div class="pt-5 pb-5"></div>
		<div class="card col-md-3 mx-auto shadow">
				<div class="card-header"><strong>Edit details for <?php echo htmlspecialchars($name); ?>:</strong><br/>
					<form action="specials-delete.php" method="post">
						<input class="btn btn-primary" type="submit" value="Delete">
						<input name='name' id='name' value='<?php echo $name; ?>' hidden='hidden'>
					</form>
				</div>
				<div class="card-body">
					<form action='specials-update.php' method='post'>
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
							<label for="type">Type:</label>
							<select class="form-control selectpicker" id="type" name="type" required>
								<option>Select Category</option>
								<option>food</option>
								<option>drink</option>
							</select>
							<label for="price">Price:</label>
							<input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($price); ?>" min="0" step="0.01" required>
							<label for="url">URL:</label>
							<input type="text" class="form-control" id="url" name="url" value="<?php echo htmlspecialchars($url); ?>">
							<label for="description">Description</label>
							<textarea class="form-control" id="description" name="description" rows="3"><?php echo htmlspecialchars($description); ?></textarea>	
							<input class="form-control btn btn-primary" type="submit">
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