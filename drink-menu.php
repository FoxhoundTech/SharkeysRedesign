<?php 
	require_once("se_db_password.php"); 
	require_once("utils.php");
	$connect = mysqli_connect("localhost", "jkolts", $mysql_password, "jkolts");
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		Drink Menu Page
	*/
	$title = "Drinks";
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
		
		<div class="pt-5 text-center">
			<h1 style="color: white">Menu</h1>
		</div>
		
		<!--Menu Accordion -->
		<div id="accordion" style="padding-top: 2%;padding-left: 10%; padding-right: 10%; padding-bottom: 2%">
			<div class="card">
				<div class="card-header" id="premiumHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsePremium" aria-expanded="true" aria-controls="collapsePremium">
						Premium Standards
						</button>
					</h5>
				</div>
				
				<div id="collapsePremium" class="collapse" aria-labeledby="premiumHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM beer WHERE type='Premium Standards'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo drinkify( $row['name'], $row['type'], $row['alchoholPercentage'], $row['cratedLocation'], $row['description'] ) ;
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="rotatingHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseRotating" aria-expanded="false" aria-controls="collapseRotating">
						Rotating Taps
						</button>
					</h5>
				</div>
				
				<div id="collapseRotating" class="collapse" aria-labeledby="rotatingHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM beer WHERE type='Rotating Taps'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo drinkify( $row['name'], $row['type'], $row['alchoholPercentage'], $row['cratedLocation'], $row['description'] ) ;
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="standardHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseStandard" aria-expanded="false" aria-controls="collapseStandard">
						The Standards
						</button>
					</h5>
				</div>
				
				<div id="collapseStandard" class="collapse" aria-labeledby="standardHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM beer WHERE type='Standards'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo drinkify( $row['name'], $row['type'], $row['alchoholPercentage'], $row['cratedLocation'], $row['description'] ) ;
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="seasonalHeader">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeasonal" aria-expanded="false" aria-controls="collapseSeasonal">
						Seasonal & Limited Bottles
						</button>
					</h5>
				</div>
				
				<div id="collapseSeasonal" class="collapse" aria-labeledby="bonelessWingsHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM beer WHERE type='Limited Edition Specialty Brews'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo drinkify( $row['name'], $row['type'], $row['alchoholPercentage'], $row['cratedLocation'], $row['description'] ) ;
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="bottlesHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseBottles" aria-expanded="false" aria-controls="collapseBottles">
						Bottles & Cans
						</button>
					</h5>
				</div>
				
				<div id="collapseBottles" class="collapse" aria-labeledby="bottlesHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM beer WHERE type='Bottles/Cans'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo drinkify( $row['name'], $row['type'], $row['alchoholPercentage'], $row['cratedLocation'], $row['description'] ) ;
							}
						?>
					</div>
				</div>
			</div>
			
		</div>
		
		
		<?php
		mysqli_close($connect);
		require_once('footer.php'); ?>
		
		<script>
			function updateNavbar() {
				document.getElementById('drink').className += " active";
			}
			
			updateNavbar();
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html> 