<?php 
	require_once("se_db_password.php"); 
	require_once("utils.php");
	$connect = mysqli_connect("localhost", "jkolts", $mysql_password, "jkolts");
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		Menu Page
	*/
	$title = "Menu";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<style> 
			.carousel-inner{
				height: 400px;
			}
		</style>
		<link rel="stylesheet" href="sharkeys.css" type='text/css'>		
	</head>	
	<body>
		<?php require_once("navbar.php"); ?>
		<br/><br/>
		<!-- Image Carousel -->
		<div id="menuCarousel" class="carousel slide pt-5" data-ride="carousel">
			<div class="carousel-inner">
				<!--<div class="carousel-item active">
					<img class="d-block w-100" src="burger.jpg" alt="First slide" style="height: 100% !important; width:  100% !important; border: 1px solid white;">
				</div>-->
				<div class="carousel-item active">
					<img class="d-block w-100" src="wrap.jpg" alt="Second slide" style="height: 100% !important; width:  100% !important; border: 1px solid white;">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="sandwich.jpg" alt="Third slide" style="height: 100% !important; width:  100% !important; border: 1px solid white;">
				</div>
			</div>
			<a class="carousel-control-prev" href="#menuCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#menuCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="pt-5 text-center">
			<h1 style="color: white">MENU</h1>
		</div>
		
		<!--Menu Accordion -->
		</div>
		<div id="accordion" style="padding-top: 2%;padding-left: 10%; padding-right: 10%; padding-bottom: 2%">
			<div class="card">
				<div class="card-header" id="sharkBitesHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSharkBites" aria-expanded="true" aria-controls="collapseSharkBites">
						Shark Bites
						</button>
					</h5>
				</div>
				
				<div id="collapseSharkBites" class="collapse" aria-labeledby="sharkBitesHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Shark Bites'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="saladHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSalad" aria-expanded="false" aria-controls="collapseSalad">
						Salads
						</button>
					</h5>
				</div>
				
				<div id="collapseSalad" class="collapse" aria-labeledby="saladHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Salads'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="jumboWingsHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseJumboWings" aria-expanded="false" aria-controls="collapseJumboWings">
						Sharkey's Famous Jumbo Wings
						</button>
					</h5>
				</div>
				
				<div id="collapseJumboWings" class="collapse" aria-labeledby="jumboWingsHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Jumbo Wings'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="bonelessWingsHeader">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseBonelessWings" aria-expanded="false" aria-controls="collapseBonelessWings">
						Boneless Wings
						</button>
					</h5>
				</div>
				
				<div id="collapseBonelessWings" class="collapse" aria-labeledby="bonelessWingsHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Boneless Wings'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="BBQHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseBBQ" aria-expanded="false" aria-controls="collapseBBQ">
						Sharkey's Signature Pork BBQ
						</button>
					</h5>
				</div>
				
				<div id="collapseBBQ" class="collapse" aria-labeledby="BBQHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Signature Pork BBQ'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="sandwichHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSandwiches" aria-expanded="false" aria-controls="collapseSandwiches">
						Sandwiches
						</button>
					</h5>
				</div>
				
				<div id="collapseSandwiches" class="collapse" aria-labeledby="sandwichHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Sandwiches'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="chickenSandwichHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseChickenSandwiches" aria-expanded="false" aria-controls="collapseChickenSandwiches">
						Chicken Sandwiches
						</button>
					</h5>
				</div>
				
				<div id="collapseChickenSandwiches" class="collapse" aria-labeledby="chickenSandwichHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Chicken Sandwiches'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="subsHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSubs" aria-expanded="false" aria-controls="collapseSubs">
						Subs
						</button>
					</h5>
				</div>
				
				<div id="collapseSubs" class="collapse" aria-labeledby="subsHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Subs'";
							$results = mysqli_query($connect,$SQLcmd);
					
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="burgersHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseBurgers" aria-expanded="false" aria-controls="collapseBurgers">
						Burgers
						</button>
					</h5>
				</div>
				
				<div id="collapseBurgers" class="collapse" aria-labeledby="burgersHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Burgers'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="wrapsHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseWraps" aria-expanded="false" aria-controls="collapseWraps">
						Wraps
						</button>
					</h5>
				</div>
				
				<div id="collapseWraps" class="collapse" aria-labeledby="wrapsHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Wraps'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo menuify( $row['name'], $row['price'], $row['description'], count($row) );
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" id="sidesHeading">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSides" aria-expanded="false" aria-controls="collapseSides">
						Side Items
						</button>
					</h5>
				</div>
				
				<div id="collapseSides" class="collapse" aria-labeledby="sidesHeading" data-parent="#accordion">
					<div class="card-body">
						<?php
							
							$SQLcmd = "SELECT * FROM menu WHERE type='Side'";
							$results = mysqli_query($connect,$SQLcmd);
							
							while ($row=mysqli_fetch_assoc($results)) {
								echo $row['name'] . "\n<br/>";
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
				document.getElementById('menu').className += " active";
			}
			
			updateNavbar();
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html> 