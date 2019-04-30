<?php 

	error_reporting(e_all);
	ini_set('display_errors', 1);
	require_once("se_db_password.php"); 
	require_once("utils.php");
	$connect = mysqli_connect("localhost", "jkolts", $mysql_password, "jkolts");
	$title = "Events";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?></title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/>
		
		<link rel="stylesheet" href="fullcalendar/fullcalendar-4.0.1/packages/core/main.css"/>
		<link rel="stylesheet" href="fullcalendar/fullcalendar-4.0.1/packages/daygrid/main.css"/>
		
		<link rel="stylesheet" href="sharkeys.css" type='text/css'/>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"/>
		
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		
		<script src="fullcalendar/fullcalendar-4.0.1/packages/core/main.js"></script>
		<script src="fullcalendar/fullcalendar-4.0.1/packages/daygrid/main.js"></script>
		<script src="fullcalendar/fullcalendar-4.0.1/packages/interaction/main.js"></script>
	</head>
	<body>
		<?php 
			require_once("navbar.php"); 
						
			$SQLcmd = "SELECT * FROM events";
			$result = mysqli_query($connect,$SQLcmd);
			
			$events = array();
			while( $row=mysqli_fetch_assoc($result) ) {
				$eventsArray = array();
				$eventsArray['id'] = $row['id'];
				$eventsArray['title'] = $row['type'];
				$eventsArray['start'] = $row['date'];
				
				array_push($events, $eventsArray);
			}
			$events_encoded = json_encode( $events );		
		?>
		
		<div class="pt-5 text-center">
			<h1 style="color: white">Events</h1>
		</div>
		
		<div class="container pb-5 justify-content-center">
			<div class="row">
				<div class="card mr-2 col-md px-0">
					<div class="card-header text-center">Sharkey's Up Top in Radford</div>
					<img class="card-img-bottom" src="images/upTop.jpg" alt="Up Top Information"/>
				</div>
				<div class="card col-md-7">
					<div id='calendar'></div>
				</div>
			</div>
			<div class="row mt-1">
				<div class="card col-sm mr-2 px-0">
					<img class="card-img" src="images/djsuds.jpg" alt="DJ Suds"/>
				</div>
				<div class="card col-sm-7 h-25 mr-2 px-0">
					<img class="card-img" src="images/event.jpg" alt="Location Image"/>
				</div>
				<div class="card col-sm">
					<div class="card-body text-center">
						<p class="card-text"><strong>Sharkey's Up Top<br/><br/>Radford Virginia's premier event destination.<br/><br/>Book with us today!</strong></p>					
					</div>
				</div>
			</div>
		</div>
		
		<hr style="border-color: white" class="ml-5 mr-5"/>
		
		<div class="container pb-5 pt-5">
			<div class="card col-md">
				<div class="card-header text-center"><h3>Schedule Your Event With Us<h3></div>
				<div class="card-body">
					<form action="events-submit.php" method="post">
						<div class="form-row justify-content-center">
							<div class="form-group col-md-4">
								<label for="inputName">Name:</label>
								<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter Name" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputType">Type of Event:</label>
								<input type="text" class="form-control" id="inputType"  name="inputType" placeholder="Enter Event Type" required>
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md-4">
								<label for="inputPhone">Phone:</label>
								<input type="tel" class="form-control" id="inputPhone" name="inputPhone" placeholder="Enter Phone" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputDate">Event Date:</label>
								<input type="text" class="form-control" id="inputDate" name="inputDate" placeholder="Select Date" required>
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md-4">
								<label for="inputEmail">Email:</label>
								<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter Email" required>
							</div>
							<div class="form-group col-md-4">
								<label for="inputGuests">Number of Guests:</label>
								<input type="number" class="form-control" id="inputGuests" name="inputGuests" placeholder="Enter Guest Count" required>
							</div>
						</div>
						<div class="form-row justify-content-center">
							<div class="form-group col-md-8">
								<label for="inputComments">Questions / Comments:</label>
								<textarea class="form-control" id="inputComments" name="inputComments" rows="10" required></textarea>
							</div>
						</div>
						<div class="text-center"><button class="btn btn-primary" onclick="#">Submit Request</button></div>
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
				document.getElementById('events').className += " active";
			}
			
			updateNavbar();
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function() {
				var date = flatpickr('#inputDate');					
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var calendarEl = document.getElementById('calendar');

				var calendar = new FullCalendar.Calendar(calendarEl, {
						plugins: [ 'dayGrid' ],
						defaultView: 'dayGridMonth',
						events:  <?php echo $events_encoded; ?>  

				});

				calendar.render();
			});
		</script>
	</body>
</html>