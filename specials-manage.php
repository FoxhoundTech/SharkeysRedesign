<?php
	error_reporting(e_all);
	require_once("db_info.php"); 
	require_once("utils.php");
	require_once("sharkeys-constants.php");
	global $foodAllowed;
	$connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_db);
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		manage specials manager
	*/
	$title="Manage Specials";
?><!DOCTYPE html>

<html>
	<head>	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> <?php echo $title ?> </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="sharkeys.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"/>
		
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	</head>
	<body>
		<?php require_once("navbar.php"); 
			session_start();
			if(!(isset($_SESSION["SharkLogged"]) && !empty($_SESSION["SharkLogged"]))) {
				header("Location: ./admin.php");
			}
		?>
		
		<div class="pt-5 pb-5"></div>
		<div class="row pt-5 mb-5">
			<div class="card col-md-6 mx-auto shadow">
				<div class="card-header"><strong>Current Specials:</strong></div>
				<div class="card-body" style="height: 40em; overflow-y: scroll">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Name:</th>					
								<th scope="col">Type:</th>
								<th scope="col">Price:</th>
								<th scope="col">description:</th>
								<th scope="col">Url:</th>
								<th scope="col">Manage:</th>
							</tr>
						</thead>
						<tbody>
							<?php 						
								$SQLcmd = "SELECT * FROM specials";
								$results = mysqli_query($connect,$SQLcmd);
								
								while ($row=mysqli_fetch_assoc($results)) {
									echo specialManage( $row['name'], $row['type'], $row['price'], $row['description'], $row['url']);
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="card col-md-3 mx-auto shadow">
				<div class="card-header"><strong>Create New Special:</strong></div>
				<div class="card-body">
					<form action="specials-create.php" method="post">
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="specialName">Name:</label>
								<input type="text" class="form-control" id="specialName" name="specialName" placeholder="Enter Name">
							</div>
							<div class="form-group col-md">
								<label for="specialType">Type of Special:</label>
								<select class="form-control selectpicker" id="specialType" name="specialType" required>
									<option value="" disabled selected>Select type</option>
									<option>food</option>
									<option>drink</option>
								</select>
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="specialPrice">Price:</label>
								<input type="text" class="form-control" id="specialPrice" name="specialPrice" placeholder="Enter price">
							</div>
							<div class="form-group col-md">
								<label for="specialURL">Image URL:</label>
								<input type="text" class="form-control" id="specialURL" name="specialURL" placeholder="Enter url">
							</div>
						</div>
						<label for="specialDescription">Specials:</label>
						<textarea class="form-control mb-2" id="specialDescription" name="specialDescription" rows="3"></textarea>
						<input class="form-control btn btn-primary" type="submit">
					</form>
				</div>
			</div>
		</div>
		
		<?php
			mysqli_close($connect);
			
			require_once("footer.php"); 
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