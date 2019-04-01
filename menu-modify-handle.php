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
	$title="Modify Menu";
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
			
			$name = mysqli_real_escape_string($connect, $_POST['name']);
			$type = mysqli_real_escape_string($connect, $_POST['category']);
			$price = mysqli_real_escape_string($connect, $_POST['price']);
			$description = mysqli_real_escape_string($connect, $_POST['description']);
					
			$SQLcmd = "INSERT INTO menu(name, type, price, description) VALUES ('$name', '$type', '$price', '$description')";
			$result = mysqli_query($connect, $SQLcmd);
			if($result) {	$sucess = true;	}
		?>
		
		<div class="pt-5 pb-5"></div>
		<div class="row pt-5">
			<div class="card col-md-6 mx-auto shadow">
				<div class="card-header"><strong>Select menu item to edit:</strong></div>
				<div class="card-body" style="height: 50em; overflow-y: scroll">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">Name:</th>								
								<th scope="col">Type:</th>
								<th scope="col">Price:</th>
								<th scope="col">Description:</th>
								<th scope="col">Edit Item:</th>
							</tr>
						</thead>
						<tbody>
							<?php						
								$SQLcmd = "SELECT * FROM menu";
								$results = mysqli_query($connect,$SQLcmd);
								
								$i = 1;
								while ($row=mysqli_fetch_assoc($results)) {
									echo editTable( $i, $row['name'], $row['type'], $row['price'], $row['description'] );
									$i++;
								}
								mysqli_close($connect);
							?>
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="card col-md-3 mx-auto shadow">
				<div class="card-header"><strong>Add new item to menu:</strong></div>
				<div class="card-body">
					<form action='menu-modify-handle.php' method='post'>
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name">
							<label for="category">Category:</label>
							<select class="form-control" id="category">
								<option>Select Category</option>
								<?php 
									foreach( $foodAllowed AS $value ) {
										echo "<option>$value</option>";
									}
								?>
							</select>
							<label for="price">Price:</label>
							<input type="number" class="form-control" id="price" placeholder="Enter price" min="0" step="0.01">
							<label for="description">Description</label>
							<textarea class="form-control" id="description" rows="3"></textarea>	
							<input class="form-control btn btn-primary" type="submit">
						</div>
					</form>
					<?php
						if ($sucess === true) {
							?><div class="alert alert-success" role="alert">Item Added Successfully</div><?php
						}
						else if ($sucess !== true) {
							?><div class="alert alert-danger" role="alert">Item Failed to Add</div><?php
						}
					?>
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