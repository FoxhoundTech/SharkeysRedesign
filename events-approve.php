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
			
			$id = mysqli_real_escape_string($connect, $_POST['id']);
			$contact = mysqli_real_escape_string($connect, $_POST['contact']);
			$type = mysqli_real_escape_string($connect, $_POST['type']);
			$phone = mysqli_real_escape_string($connect, $_POST['phone']);
			$date = mysqli_real_escape_string($connect, $_POST['date']);
			$email = mysqli_real_escape_string($connect, $_POST['email']);
			$guests = mysqli_real_escape_string($connect, $_POST['guests']);
			$comments = mysqli_real_escape_string($connect, $_POST['comments']);
			
			if( $_SERVER['REQUEST_METHOD'] === 'POST') {
				if ( isset( $_POST['approve'] ) ) {
					$SQLcmd = "DELETE FROM pendingEvents WHERE id=$id";
					$results = mysqli_query($connect, $SQLcmd);
					if($results) {
						$SQLcmd = "INSERT INTO events(contact, type, phone, date, email, guests, comments) VALUES ('$contact', '$type', '$phone', '$date', '$email', '$guests', '$comments')";
						$insertSuccess = mysqli_query($connect, $SQLcmd);
						if(!$insertSuccess) {
							echo "<h3>Unable to update current events</h3>";
							$updateComplete = false;
						}
						else {
							$updateComplete = true;
						}
					}
					else{
						echo "<h3>Unable to update pending events</h3>";
						$updateComplete = false;
					}
				}
				else {					
					$SQLcmd = "DELETE FROM pendingEvents WHERE id=$id";
					$results = mysqli_query($connect, $SQLcmd);
					if(!$results) {
						echo "<h3>Unable to update pending events</h3>";
					}
					else {
						$updateComplete = true;
					}
				}
			}

		?>
		
		<div class="pt-5 pb-5"></div>
		<div class="row pt-5">
			<div class="card col-md-6 mx-auto shadow">
				<div class="card-header"><strong>Pending Event Requests:</strong></div>
				<div class="card-body" style="height: 40em; overflow-y: scroll">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">ID:</th>
								<th scope="col">Contact:</th>					
								<th scope="col">Type:</th>
								<th scope="col">Phone:</th>
								<th scope="col">Date:</th>
								<th scope="col">Email:</th>
								<th scope="col">Guests:</th>
								<th scope="col">Comments:</th>
								<th scope="col">Manage:</th>
							</tr>
						</thead>
						<tbody>
							<?php 						
								$SQLcmd = "SELECT * FROM pendingEvents";
								$results = mysqli_query($connect,$SQLcmd);
								
								while ($row=mysqli_fetch_assoc($results)) {
									echo approveEvents( $row['id'], $row['contact'], $row['type'], $row['phone'], $row['date'], $row['email'], $row['guests'], $row['comments'] );
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		
			<div class="card col-md-3 mx-auto shadow">
				<div class="card-header"><strong>Create New Event:</strong></div>
				<div class="card-body">
					<form action='events-create.php' method='post'>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputName">Name:</label>
								<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter Name">
							</div>
							<div class="form-group col-md">
								<label for="inputType">Type of Event:</label>
								<input type="text" class="form-control" id="inputType" name="inputType" placeholder="Enter Event Type">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputPhone">Phone:</label>
								<input type="tel" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone">
							</div>
							<div class="form-group col-md">
								<label for="inputDate">Event Date:</label>
								<input type="text" class="form-control" id="inputDate" name="inputeDate" placeholder="Select Date">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputEmail">Email:</label>
								<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter Email">
							</div>
							<div class="form-group col-md">
								<label for="inputGuests">Number of Guests:</label>
								<input type="number" class="form-control" id="inputGuests" name="inputGuests" placeholder="Enter Guest Count">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputComments">Questions / Comments:</label>
								<textarea class="form-control" id="inputComments" name="inputComments" rows="10"></textarea>
							</div>
						</div>
						<div class="text-center mb-1"><input class="form-control btn btn-primary" type="submit"/></div>
					</form>
					<?php
						if ($updateComplete === true) {
							?><div class="alert alert-success" role="alert">Event Update Successful</div><?php
						}
						else if ($updateComplete === false) {
							?><div class="alert alert-danger" role="alert">Event Failed to Update</div><?php
						}
					?>
				</div>
			</div>
		</div>
		<div class="row mt-5 mb-5">
			<div class="card col-md-6 mx-auto shadow">
				<div class="card-header"><strong>Scheduled Events</strong></div>
				<div class="card-body" style="height: 40em; overflow-y: scroll">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">ID:</th>
								<th scope="col">Contact:</th>					
								<th scope="col">Type:</th>
								<th scope="col">Phone:</th>
								<th scope="col">Date:</th>
								<th scope="col">Email:</th>
								<th scope="col">Guests:</th>
								<th scope="col">Comments:</th>
								<th scope="col">Manage:</th>
							</tr>
						</thead>
						<tbody>
							<?php 						
								$SQLcmd = "SELECT * FROM events";
								$results = mysqli_query($connect,$SQLcmd);
								
								while ($row=mysqli_fetch_assoc($results)) {
									echo currentEvents( $row['id'], $row['contact'], $row['type'], $row['phone'], $row['date'], $row['email'], $row['guests'], $row['comments'] );
								}
								mysqli_close($connect);
							?>
						</tbody>
					</table>
				</div>
			</div>
			
			<!-- This div pasted here for formatting only.  It can be removed but will change the position in browser of previous screen.  -->
			<div class="card col-md-3 mx-auto shadow" style="visibility: hidden">
				<div class="card-header"><strong>Create New Event:</strong></div>
				<div class="card-body">
					<form action='event-create.php' method='post'>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputName">Name:</label>
								<input type="text" class="form-control" id="inputName" placeholder="Enter Name">
							</div>
							<div class="form-group col-md">
								<label for="inputType">Type of Event:</label>
								<input type="text" class="form-control" id="inputType" placeholder="Enter Event Type">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputPhone">Phone:</label>
								<input type="tel" class="form-control" id="inputPhone" placeholder="Enter Phone">
							</div>
							<div class="form-group col-md">
								<label for="inputDate">Event Date:</label>
								<input type="text" class="form-control" id="inputDate" placeholder="Select Date">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputEmail">Email:</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
							</div>
							<div class="form-group col-md">
								<label for="inputGuests">Number of Guests:</label>
								<input type="number" class="form-control" id="inputGuests" placeholder="Enter Guest Count">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md">
								<label for="inputComments">Questions / Comments:</label>
								<textarea class="form-control" id="inputComments" rows="10"></textarea>
							</div>
						</div>
						<div class="text-center"><input class="form-control btn btn-primary" type="submit"/></div>
					</form>
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