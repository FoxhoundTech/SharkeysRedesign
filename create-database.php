<?php 
	error_reporting(e_all)
?>

<html>
	<head>
		<title> Reset Database </title>
	</head>
	<body>
	<h2>Resetting the Database</h2>
		<h3>Connect to the DB</h3>
		<?php
			require_once("se_db_password.php"); 
			$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");

			echo "Connection ", ($connect ? "" : "NOT "), "established.<br />\n";
			if (mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }
		?>
		<h3>Drop the tables</h3>
		<?php
			$SQLcmd = "DROP TABLE Login"; 
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd),"</tt><br/>\n";
			$results = mysqli_query($connect,$SQLcmd); 
			echo "Result of DROP: <tt>", htmlspecialchars($results), "</tt><br/>\n";
			$SQLcmd2 = "DROP TABLE menu";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd),"</tt><br/>\n";
			$results2 = mysqli_query($connect, $SQLcmd2);
			echo "Result of DROP: <tt>", htmlspecialchars($results2),"</tt><br/>\n";
		?>
		<h3>Create new Table</h3>
		<?php
			$query = "CREATE TABLE Login(username VARCHAR(20) PRIMARY KEY
											, password VARCHAR(20))";
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create: <tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		<h3>Create Menu DB</h3>
		<?php $query = "CREATE TABLE menu(name VARCHAR(30) PRIMARY KEY
											, type VARCHAR(30)
											, price DECIMAL (6,2)
											, description VARCHAR(1000))";
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		
		<h3>Insert Menu</h3>
		<?php 
			$stmt1 = "INSERT INTO menu(name, type, price, description) VALUES ('Homemade Soups','Shark Bites',3.25,'Ask your server for today\'s featured soups or try some of our famous homemade Chili or Veggie Chili. Large: $4.50')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt1), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt1);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt2 = "INSERT INTO menu(name, type, price, description) VALUES ('Soft Pretzels','Shark Bites',8,'Three giant‏ salted soft pretzels served with nacho cheese sauce for dippin\'.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt2), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt2);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt3 = "INSERT INTO menu(name, type, price, description) VALUES ('Creamy Avocado Dip','Shark Bites',10,'A blend of fresh avocados, cream cheese, tomatoes, jalapenos & onions. Served w/ tortilla chips.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt3), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt3);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt4 = "INSERT INTO menu(name, type, price, description) VALUES ('Cajun Crab Dip','Shark Bites',10,'Our signature homemade crab dip loaded w/ tons of crab meat. Served w/ fresh toasted bread.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt4), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt4);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt5 = "INSERT INTO menu(name, type, price, description) VALUES ('Spinach & Artichoke Dip','Shark Bites',9,'Homemade and served w/ fresh toasted bread.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt5), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt5);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt6 = "INSERT INTO menu(name, type, price, description) VALUES ('Buffalo Chicken Dip','Shark Bites',10,'Our homemade Spinach & Artichoke Dip loaded with grilled chicken and hot sauce.  Served with tortilla chips.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt6), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt6);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt7 = "INSERT INTO menu(name, type, price, description) VALUES ('Deluxe Nachos','Shark Bites',10,'Tortilla chips topped w/ cheddar cheese sauce, homemade chili or veggie chili, shredded lettuce, diced tomatoes & onions, cheddar/jack cheese, and jalapenos.  Finished w/ sour cream and homemade avocado dip.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt7), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt7);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt8 = "INSERT INTO menu(name, type, price, description) VALUES ('Fingers & Fries','Shark Bites',9,'Four chicken tenders w/ choice of any wing sauce and choice of fries.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt8), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt8);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt9 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Quesadilla','Shark Bites',8,'Jam-packed w/ cheddar & jack cheese, bacon, tomatoes, onions & green peppers. Topped w/ jalapenos and served w/ sides of sour cream and salsa.  Stuffed w/ grilled chicken breast $11')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt9), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt9);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt10 = "INSERT INTO menu(name, type, price, description) VALUES ('Basket of Fries or Tots','Shark Bites',5,'Seasoned Fries, Waffle Fries, or Tater Tots Topped w/ cheddar cheese sauce & bacon $6.5 Sweet Potato Fries - served w/ a side of sweet sauce $6.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt10), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt10);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt11 = "INSERT INTO menu(name, type, price, description) VALUES ('Chili-Cheese Fries','Shark Bites',6.5,'A basket of fries, topped w/ chili, cheddar cheese sauce & jalapenos')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt11), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt11);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt12 = "INSERT INTO menu(name, type, price, description) VALUES ('Beer-battered Onion Rings','Shark Bites',7,'Served w/ horseradish sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt12), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt12);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt13 = "INSERT INTO menu(name, type, price, description) VALUES ('Fried Pickles','Shark Bites',8,'Kosher dill pickle spears, breaded & fried, served w/ horseradish sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt13), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt13);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt14 = "INSERT INTO menu(name, type, price, description) VALUES ('Fried Mac & Cheese Wedges','Shark Bites',7,'Classic mac & cheese, breaded & fried, served with marinara sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt14), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt14);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt15 = "INSERT INTO menu(name, type, price, description) VALUES ('Basket of Corn Dog Nuggets','Shark Bites',6,'Served w/ mustard')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt15), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt15);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt16 = "INSERT INTO menu(name, type, price, description) VALUES ('Mozzarella Sticks','Shark Bites',7,'Fried until golden brown, served w/ marinara sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt16), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt16);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			
			$stmt17 = "INSERT INTO menu(name, type, price, description) VALUES ('The \"BIG\" Salad','Salads',7,'An over-sized salad of fresh greens, grape tomatoes, cucumbers, red onions & fresh mushrooms. Finished w/ crisp Applewood smoked bacon, cheddar/jack cheese & croutons. With grilled chicken breast $12.5  With grilled steak $13.5 With grilled Mahi-Mahi $14.5 With grilled buffalo shrimp $14.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt17), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt17);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt18 = "INSERT INTO menu(name, type, price, description) VALUES ('Buffalo Chicken Salad','Salads',13.50,'Grilled chicken breast coated w/ our #4 Hokie Hot Sauce on top of fresh greens w/ grape tomatoes, cucumbers, mushrooms, red onions, chopped bacon, crumbled bleu cheese & croutons. Served w/ homemade ranch on the side. Substitute grilled buffalo shrimp $15.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt18), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt18);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }

			$stmt19 = "INSERT INTO menu(name, type, price, description) VALUES ('Taco Salad Bowl','Salads',12,'Romaine lettuce, cheddar/jack cheese, tomatoes, onions and jalapenos served in a crispy taco shell salad bowl. Served w/ sides of salsa and homemade mexi-ranch. Topped w/ your choice of seasoned taco meat, seasoned chicken, chili, or veggie chili.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt19), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt19);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt20 = "INSERT INTO menu(name, type, price, description) VALUES ('Caesar Salad','Salads',8.50,'Romaine lettuce tossed w/ Caesar dressing and topped w/ fresh grated Parmesan, cracked black pepper and croutons. With grilled chicken breast $12.  With grilled steak $13. With grilled Mahi-Mahi $14. With grilled buffalo shrimp $14.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt20), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt20);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; } 	

			$stmt21 = "INSERT INTO menu(name, type, price, description) VALUES ('Cobb Salad','Salads',13.50,'Fresh salad greens topped w/ diced grilled chicken breast, tomatoes, avocados, hard-boiled eggs, Applewood smoked bacon & bleu cheese crumbles.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt21), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt21);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt22 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Steak Salad','Salads',14,'Romaine lettuce tossed in Caesar dressing and topped w/ grilled marinated steak, grape tomatoes, crisp bacon, bleu cheese crumbles, grated Parmesan & croutons.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt22), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt22);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt23 = "INSERT INTO menu(name, type, price, description) VALUES ('Jamaican Chicken Salad','Salads',13.50,'Grilled chicken breast topped w/ sweet & spicy Jamaican relish on a bed of salad greens w/ grape tomatoes, cucumbers, mushrooms, red onions, chopped bacon, bleu cheese crumbles & croutons. Served w/ homemade Honey Mustard dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt23), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt23);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt24 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Tender Salad','Salads',13,'Our \"BIG\" Salad topped w/ fried chicken tenders. Great w/ our homemade Honey Mustard!')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt24), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt24);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt25 = "INSERT INTO menu(name, type, price, description) VALUES ('Chef Salad','Salads',13,'Our \"BIG\" Salad topped w/ honey-baked ham & smoked turkey.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt25), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt25);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt26 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Mahi-Mahi Salad','Salads',14.50,'Wild-caught Mahi grilled w/ cajun spices or lemon butter, served on a bed of fresh greens w/ grape tomatoes, cucumbers & red onions. Finished w/ sugar-coated walnuts.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt26), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt26);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt27 = "INSERT INTO menu(name, type, price, description) VALUES ('Soup & Salad Combo','Salads',9,'A large cup of our homemade soup, chili, or veggie chili & a side tossed salad or side Caesar salad.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt20), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt20);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt28 = "INSERT INTO menu(name, type, price, description) VALUES ('Side Tossed or Caesar Salad','Salads',5,'Add to any entree for $4')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt28), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt28);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt29 = "INSERT INTO menu(name, type, price, description) VALUES ('Dressings:','Salads',0,' Homemade Ranch, Homemade Mexi-Ranch, Homemade Bleu Cheese, Homemade Honey Mustard, Thousand Island, Oil & Vinegar, Caesar, Italian, Balsamic Vinaigrette, Mango Pineapple Vinaigrette, Light Ranch, Fat-Free Italian')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt29), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt29);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt30 = "INSERT INTO menu(name, type, price, description) VALUES ('Soup, Salad & Baked Potato Bar','Salads',0,'Tons of fresh toppings, baked potatoes, garlic breadsticks, 2 homemade soups, homemade chili & veggie chili, and Zeppoli dessert')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt30), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt30);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			////////////////////////////////////////////////////////////////////////////////////
			
			$stmt31 = "INSERT INTO menu(name, type, price, description) VALUES ('Small Wings','Jumbo Wings',10,'10 wings - 1 flavor')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt31), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt31);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt30 = "INSERT INTO menu(name, type, price, description) VALUES ('Large Wings','Jumbo Wings',15,'16 wings - up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt30), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt30);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt30 = "INSERT INTO menu(name, type, price, description) VALUES ('Half Bucket','Jumbo Wings',24,'25 wings - up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt30), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt30);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt30 = "INSERT INTO menu(name, type, price, description) VALUES ('Full Bucket','Jumbo Wings',45,'50 wings - up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt30), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt30);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
			
			$stmt30 = "INSERT INTO menu(name, type, price, description) VALUES ('Wing Sampler','Jumbo Wings',54,'60 wings - up to 3 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt30), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt30);
			if($result) { echo "Insert Successful\n";	}
			else { echo "Insert Failure"; }
	
			///////////////////////////////////////////////////////////////////////////////////////
			
			
		?>
		
		<h3>Insert Admin</h3>
		<?php
			$sqlStmt = "INSERT INTO Login (username, password) VALUES ('admin','admin')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "Insert Failure"; }
		?>
		<h3>Committing Change</h3>
		<?php
			$commit_result = mysqli_query($connect, "COMMIT");
			echo "Result of Commit: <tt>", htmlspecialchars($commit_result), "</tt><br/>\n";
		?>
		<h3>Closing the connection</h3>
		<?php
			$close_result = mysqli_close($connect);
			echo "Result of Close: <tt>", htmlspecialchars($close_result), "</tt><br/>\n";
			if ($close_result == 1)
			{
				echo "Database Successfully Reset";
			}
			else 
			{
				echo "Database Failed to Reset";
			}
		?>
	</body>
</html>