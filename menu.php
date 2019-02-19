<html>
	<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
		require_once("se_db_password.php"); 
		$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");
	?>
	<head>
		<title>Menu</title>
		<link rel="stylesheet" href="sharkeys.css" type='text/css'>
	</head>
	
	<body>
		<?php require_once("navbar.php"); ?>
		
		<div class='menu-content'>
			<div class="menu">
				<h1>Menu</h1>
			</div>
			
			<div class="appetizers-title">
				<h1>Shark Bites<h1>
			</div>
			
			<div class='menu-section'>
				<div class='grid-container-a'>
				<?php
					$appQuery = "SELECT * FROM menu WHERE type = 'Shark Bites'";
					$results = mysqli_query($connect, $appQuery);
					if($results) {
						while($row = mysqli_fetch_assoc($results)) {
							echo "<div class='grid-item'>";
							echo "<h3>" . htmlspecialchars($row['name']) . ". . . $" . htmlspecialchars($row['price']) . "</h3>";
							echo "<h4>" . htmlspecialchars($row['description']) . "</h4>";
							echo "</div>";
						}
					} else {
						echo "Failed";
					}
					mysqli_close($connect);
				?>
				</div>
			</div>
		
			<div class="salads-title">
				<h1>Salads<h1>
			</div>
			
			<div class="grid-container-b">
				<div class="grid-item">
					<h3>The "BIG" Salad<h3>
					<h4>An over-sized salad of fresh greens, grape tomatoes, cucumbers, red onions & fresh mushrooms. Finished w/ crisp Applewood smoked bacon, cheddar/jack cheese & croutons. <h4>
				</div>
				<div class="grid-item">
					<h3>Buffalo Chicken Salad<h3>
					<h4>Grilled chicken breast coated w/ our #4 Hokie Hot Sauce on top of fresh greens w/ grape tomatoes, cucumbers, mushrooms, red onions, chopped bacon, crumbled bleu cheese & croutons. 
						Served w/ homemade ranch on the side. <h4>
				</div>
				<div class="grid-item">
					<h3>Taco Salad Bowl<h3>
					<h4>Romaine lettuce, cheddar/jack cheese, tomatoes, onions & jalapenos served in a crispy taco shell salad bowl. 
						Served w/ sides of salsa and homemade mexi-ranch. Topped w/ your choice of seasoned taco meat, seasoned chicken, chili, or veggie chili. <h4>
				</div><div class="grid-item">
					<h3>Caesar Salad<h3>
					<h4>Romaine lettuce tossed w/ Caesar dressing and topped w/ fresh grated Parmesan, cracked black pepper & croutons. <h4>
				</div>
				<div class="grid-item">
					<h3>Cobb Salad<h3>
					<h4>Fresh salad greens topped w/ diced grilled chicken breast, tomatoes, avocados, hard-boiled eggs, Applewood smoked bacon & bleu cheese crumbles. <h4>
				</div>
				<div class="grid-item">
					<h3>Soup, Salad & Baked Potato Bar<h3>
					<h4>Tons of fresh toppings, baked potatoes, garlic breadsticks, 2 homemade soups, homemade chili & veggie chili, and Zeppoli dessert <h4>
				</div>
				<div class="grid-item">
					<h3>Grilled Steak Salad<h3>
					<h4>Romaine lettuce tossed in Caesar dressing and topped w/ grilled marinated steak, grape tomatoes, crisp bacon, bleu cheese crumbles, grated Parmesan & croutons. <h4>
				</div>
				<div class="grid-item">
					<h3>Jamaican Chicken Salad<h3>
					<h4>Grilled chicken breast topped w/ sweet & spicy Jamaican relish on a bed of salad greens w/ grape tomatoes, cucumbers, mushrooms, red onions, chopped bacon, bleu cheese crumbles & croutons. 
						Served w/ homemade Honey Mustard dressing. <h4>
				</div>
				<div class="grid-item">
					<h3>Chicken Tender Salad<h3>
					<h4>Our "BIG" Salad topped w/ fried chicken tenders. Great w/ our homemade Honey Mustard!<h4>
				</div>
				<div class="grid-item">
					<h3>Chef Salad<h3>
					<h4>Our "BIG" Salad topped w/ honey-baked ham & smoked turkey.<h4>
				</div>
				<div class="grid-item">
					<h3>Grilled Mahi-Mahi Salad<h3>
					<h4>Wild-caught Mahi grilled w/ cajun spices or lemon butter, served on a bed of fresh greens w/ grape tomatoes, cucumbers & red onions. Finished w/ sugar-coated walnuts.<h4>
				</div>
				<div class="grid-item">
					<h3>Soup & Salad Combo<h3>
					<h4>A large cup of our homemade soup, chili, or veggie chili & a side tossed salad or side Caesar salad.<h4>
				</div>
				<div class="grid-item">
					<h3>Side Tossed or Caesar Salad<h3>
					<h4>Add to any entree for $4<h4>
				</div>
			</div>
			
			<div class="wings-title">
				<h1>Sharkey's Famous Jumbo Wings<h1>
			</div>
			
			<div class="grid-container-c">
				<p>All wings served w/ celery and bleu cheese or ranch dressing. Extra-crispy wings available upon request. Please allow extra cooking time.
					Extra side of celery w/ bleu cheese or ranch: $2. Extra side of bleu cheese or ranch: $0.25</p>
				<div class="grid-item">
					<h3>Small Wings<h3>
					<h4>10 wings - 1 flavor<h4>
				</div>
				<div class="grid-item">
					<h3>Large Wings<h3>
					<h4>16 wings - up to 2 flavors<h4>
				</div>
				<div class="grid-item">
					<h3>Half Bucket<h3>
					<h4>25 wings - up to 2 flavors<h4>
				</div>
				<div class="grid-item">
					<h3>Full Bucket<h3>
					<h4>50 wings - up to 2 flavors<h4>
				</div>
				<div class="grid-item">
					<h3>Wing Sampler<h3>
					<h4>60 wings - up to 3 flavors<h4>
				</div>
			</div>
			
			<div class="boneless-wings-title">
				<h1>Boneless Wings<h1>
			</div>
			
			<div class="grid-container-d">
				<div class="grid-item">
					<h3>Small Boneless Wings<h3>
					<h4>1 flavor<h4>
				</div>
				<div class="grid-item">
					<h3>Large Boneless Wings<h3>
					<h4>Up to 2 flavors<h4>
				</div>
				<div class="grid-item">
					<h3>Hot Wing Sauces<h3>
					<h4>#1. Wimpy, #2. Girly Man, #3. Cold Sweat (medium), #4. Hokie Hot Sauce, #5. TNT (Extra Hot), #6. Suicide Sauce, #7. The Terminator, #8. Three Mile Island, #9. 9-1-1<h4>
				</div>
				<div class="grid-item">
					<h3>Flavored Wing Sauces<h3>
					<h4>Sweet Thai Curry, Jamaican Jerk Sauce, Buffalo Ranch, Honey Mustard, Teriyaki, Original BBQ, Honey BBQ, Spicy BBQ, Garlic BBQ, 
						Spicy Garlic Parmesan, Cajun Asian, Garlic (choose from Mild, Medium, or Hot)<h4>
				</div>
				
			</div>
		</div>
		<?php require_once('footer.php'); ?>
		
		<script>
			function updateNavbar() {
				document.getElementById('menu').className += " active";
			}
			
			updateNavbar();
		</script>
		<!--Pork Title Grid Insert Here-->
	</body>
</html> 