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
			$connect = mysqli_connect("localhost", "jkolts", $mysql_password, "jkolts");

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
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd2),"</tt><br/>\n";
			$results2 = mysqli_query($connect, $SQLcmd2);
			echo "Result of DROP: <tt>", htmlspecialchars($results2),"</tt><br/>\n";
			$SQLcmd3 = "DROP TABLE sauce";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd3),"</tt><br/>\n";
			$results3 = mysqli_query($connect, $SQLcmd3);
			echo "Result of DROP: <tt>", htmlspecialchars($results3),"</tt><br/>\n";
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
		<?php $query = "CREATE TABLE menu(name VARCHAR(50) PRIMARY KEY
											, type VARCHAR(30)
											, price DECIMAL (6,2)
											, description VARCHAR(1000))";
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>

		<h3>Create Sauce DB</h3>
		<?php	
			$query = "CREATE TABLE sauce(name VARCHAR(20) PRIMARY KEY
											, number INT
											, type VARCHAR(30))";
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create: <tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		
		<h3>Insert Menu</h3>
		<?php 
			$stmt1 = "INSERT INTO menu(name, type, price, description) VALUES ('Homemade Soups','Shark Bites',3.25,'Ask your server for today\'s featured soups or try some of our famous homemade Chili or Veggie Chili. Large: $4.50')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt1), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt1);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt2 = "INSERT INTO menu(name, type, price, description) VALUES ('Soft Pretzels','Shark Bites',8,'Three giant salted soft pretzels served with nacho cheese sauce for dippin\'.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt2), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt2);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt3 = "INSERT INTO menu(name, type, price, description) VALUES ('Creamy Avocado Dip','Shark Bites',10,'A blend of fresh avocados, cream cheese, tomatoes, jalapenos and onions. Served with tortilla chips.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt3), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt3);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt4 = "INSERT INTO menu(name, type, price, description) VALUES ('Cajun Crab Dip','Shark Bites',10,'Our signature homemade crab dip loaded with tons of crab meat. Served with fresh toasted bread.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt4), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt4);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt5 = "INSERT INTO menu(name, type, price, description) VALUES ('Spinach and Artichoke Dip','Shark Bites',9,'Homemade and served with fresh toasted bread.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt5), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt5);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt6 = "INSERT INTO menu(name, type, price, description) VALUES ('Buffalo Chicken Dip','Shark Bites',10,'Our homemade Spinach and Artichoke Dip loaded with grilled chicken and hot sauce.  Served with tortilla chips.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt6), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt6);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt7 = "INSERT INTO menu(name, type, price, description) VALUES ('Deluxe Nachos','Shark Bites',10,'Tortilla chips topped with cheddar cheese sauce, homemade chili or veggie chili, shredded lettuce, diced tomatoes and onions, cheddar/jack cheese, and jalapenos.  Finished with sour cream and homemade avocado dip.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt7), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt7);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt8 = "INSERT INTO menu(name, type, price, description) VALUES ('Fingers and Fries','Shark Bites',9,'Four chicken tenders with choice of any wing sauce and choice of fries.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt8), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt8);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt9 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Quesadilla','Shark Bites',8,'Jam-packed with cheddar and jack cheese, bacon, tomatoes, onions and green peppers. Topped with jalapenos and served with sides of sour cream and salsa.  Stuffed with grilled chicken breast $11')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt9), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt9);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt10 = "INSERT INTO menu(name, type, price, description) VALUES ('Basket of Fries or Tots','Shark Bites',5,'Seasoned Fries, Waffle Fries, or Tater Tots Topped with cheddar cheese sauce and bacon $6.5 Sweet Potato Fries - served with a side of sweet sauce $6.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt10), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt10);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt11 = "INSERT INTO menu(name, type, price, description) VALUES ('Chili-Cheese Fries','Shark Bites',6.5,'A basket of fries, topped with chili, cheddar cheese sauce and jalapenos')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt11), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt11);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt12 = "INSERT INTO menu(name, type, price, description) VALUES ('Beer-battered Onion Rings','Shark Bites',7,'Served with horseradish sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt12), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt12);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt13 = "INSERT INTO menu(name, type, price, description) VALUES ('Fried Pickles','Shark Bites',8,'Kosher dill pickle spears, breaded and fried, served with horseradish sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt13), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt13);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt14 = "INSERT INTO menu(name, type, price, description) VALUES ('Fried Mac and Cheese Wedges','Shark Bites',7,'Classic mac and cheese, breaded and fried, served with marinara sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt14), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt14);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt15 = "INSERT INTO menu(name, type, price, description) VALUES ('Basket of Corn Dog Nuggets','Shark Bites',6,'Served with mustard')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt15), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt15);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt16 = "INSERT INTO menu(name, type, price, description) VALUES ('Mozzarella Sticks','Shark Bites',7,'Fried until golden brown, served with marinara sauce')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt16), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt16);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			$stmt17 = "INSERT INTO menu(name, type, price, description) VALUES ('The \"BIG\" Salad','Salads',7,'An over-sized salad of fresh greens, grape tomatoes, cucumbers, red onions and fresh mushrooms. Finished with crisp Applewood smoked bacon, cheddar/jack cheese and croutons. With grilled chicken breast $12.5  With grilled steak $13.5 With grilled Mahi-Mahi $14.5 With grilled buffalo shrimp $14.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt17), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt17);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt18 = "INSERT INTO menu(name, type, price, description) VALUES ('Buffalo Chicken Salad','Salads',13.50,'Grilled chicken breast coated with our #4 Hokie Hot Sauce on top of fresh greens with grape tomatoes, cucumbers, mushrooms, red onions, chopped bacon, crumbled bleu cheese and croutons. Served with homemade ranch on the side. Substitute grilled buffalo shrimp $15.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt18), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt18);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }

			$stmt19 = "INSERT INTO menu(name, type, price, description) VALUES ('Taco Salad Bowl','Salads',12,'Romaine lettuce, cheddar/jack cheese, tomatoes, onions and jalapenos served in a crispy taco shell salad bowl. Served with sides of salsa and homemade mexi-ranch. Topped with your choice of seasoned taco meat, seasoned chicken, chili, or veggie chili.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt19), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt19);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt20 = "INSERT INTO menu(name, type, price, description) VALUES ('Caesar Salad','Salads',8.50,'Romaine lettuce tossed with Caesar dressing and topped with fresh grated Parmesan, cracked black pepper and croutons.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt20), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt20);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; } 	

			$stmt21 = "INSERT INTO menu(name, type, price, description) VALUES ('Cobb Salad','Salads',13.50,'Fresh salad greens topped with diced grilled chicken breast, tomatoes, avocados, hard-boiled eggs, Applewood smoked bacon and bleu cheese crumbles.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt21), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt21);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt22 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Steak Salad','Salads',14,'Romaine lettuce tossed in Caesar dressing and topped with grilled marinated steak, grape tomatoes, crisp bacon, bleu cheese crumbles, grated Parmesan and croutons.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt22), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt22);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt23 = "INSERT INTO menu(name, type, price, description) VALUES ('Jamaican Chicken Salad','Salads',13.50,'Grilled chicken breast topped with sweet and spicy Jamaican relish on a bed of salad greens with grape tomatoes, cucumbers, mushrooms, red onions, chopped bacon, bleu cheese crumbles and croutons. Served with homemade Honey Mustard dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt23), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt23);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt24 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Tender Salad','Salads',13,'Our \"BIG\" Salad topped with fried chicken tenders. Great with our homemade Honey Mustard!')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt24), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt24);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt25 = "INSERT INTO menu(name, type, price, description) VALUES ('Chef Salad','Salads',13,'Our \"BIG\" Salad topped with honey-baked ham and smoked turkey.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt25), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt25);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt26 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Mahi-Mahi Salad','Salads',14.50,'Wild-caught Mahi grilled with cajun spices or lemon butter, served on a bed of fresh greens with grape tomatoes, cucumbers and red onions. Finished with sugar-coated walnuts.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt26), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt26);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt27 = "INSERT INTO menu(name, type, price, description) VALUES ('Soup and Salad Combo','Salads',9,'A large cup of our homemade soup, chili, or veggie chili and a side tossed salad or side Caesar salad.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt20), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt20);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt28 = "INSERT INTO menu(name, type, price, description) VALUES ('Side Tossed or Caesar Salad','Salads',5,'Add to any entree for $4')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt28), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt28);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt29 = "INSERT INTO menu(name, type, price, description) VALUES ('Dressings:','Salads',0,' Homemade Ranch, Homemade Mexi-Ranch, Homemade Bleu Cheese, Homemade Honey Mustard, Thousand Island, Oil and Vinegar, Caesar, Italian, Balsamic Vinaigrette, Mango Pineapple Vinaigrette, Light Ranch, Fat-Free Italian')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt29), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt29);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt30 = "INSERT INTO menu(name, type, price, description) VALUES ('Soup, Salad and Baked Potato Bar','Salads',9,'Tons of fresh toppings, baked potatoes, garlic breadsticks, 2 homemade soups, homemade chili and veggie chili, and Zeppoli dessert')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt30), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt30);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			////////////////////////////////////////////////////////////////////////////////////
			
			$stmt31 = "INSERT INTO menu(name, type, price, description) VALUES ('Small Wings','Jumbo Wings',10,'10 wings - 1 flavor')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt31), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt31);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt32 = "INSERT INTO menu(name, type, price, description) VALUES ('Large Wings','Jumbo Wings',15,'16 wings - up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt32), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt32);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt33 = "INSERT INTO menu(name, type, price, description) VALUES ('Half Bucket','Jumbo Wings',24,'25 wings - up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt33), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt33);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt34 = "INSERT INTO menu(name, type, price, description) VALUES ('Full Bucket','Jumbo Wings',45,'50 wings - up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt34), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt34);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt35 = "INSERT INTO menu(name, type, price, description) VALUES ('Wing Sampler','Jumbo Wings',54,'60 wings - up to 3 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt35), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt35);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
	
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt36 = "INSERT INTO menu(name, type, price, description) VALUES ('Small Boneless Wings','Boneless Wings',11,'1 flavor')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt36), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt36);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt37 = "INSERT INTO menu(name, type, price, description) VALUES ('Large Boneless Wings','Boneless Wings',16,'Up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt37), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt37);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt38 = "INSERT INTO menu(name, type, price, description) VALUES ('Full Bucket','Boneless Wings',48,'Up to 2 flavors')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt38), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt38);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt39 = "INSERT INTO sauce(name, number, type) VALUES ('Wimpy',1,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt39), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt39);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt40 = "INSERT INTO sauce(name, number, type) VALUES ('Girly Man',2,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt40), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt40);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt41 = "INSERT INTO sauce(name, number, type) VALUES ('Cold Sweat (medium)',3,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt41), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt41);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt42 = "INSERT INTO sauce(name, number, type) VALUES ('Hokie Hot Sauce',4,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt42), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt42);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt43 = "INSERT INTO sauce(name, number, type) VALUES ('TNT (extra hot)',5,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt43), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt43);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt44 = "INSERT INTO sauce(name, number, type) VALUES ('Suicide Sauce',6,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt44), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt44);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt45 = "INSERT INTO sauce(name, number, type) VALUES ('The Terminator',7,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt45), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt45);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt46 = "INSERT INTO sauce(name, number, type) VALUES ('Three Mile Island',8,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt46), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt46);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt47 = "INSERT INTO sauce(name, number, type) VALUES ('9-1-1',9,'Hot Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt47), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt47);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt48 = "INSERT INTO sauce(name, number, type) VALUES ('Honey Sriracha',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt48), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt48);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt49 = "INSERT INTO sauce(name, number, type) VALUES ('Jamaican Jerk Sauce',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt49), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt49);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt50 = "INSERT INTO sauce(name, number, type) VALUES ('Buffalo Ranch',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt50), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt50);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt51 = "INSERT INTO sauce(name, number, type) VALUES ('Honey Mustard',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt51), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt51);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt52 = "INSERT INTO sauce(name, number, type) VALUES ('Teriyaki',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt52), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt52);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt53 = "INSERT INTO sauce(name, number, type) VALUES ('Original BBQ',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt53), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt53);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt54 = "INSERT INTO sauce(name, number, type) VALUES ('Honey BBQ',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt54), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt54);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt55 = "INSERT INTO sauce(name, number, type) VALUES ('Spicy BBQ',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt55), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt55);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt56 = "INSERT INTO sauce(name, number, type) VALUES ('Garlic BBQ',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt56), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt56);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt57 = "INSERT INTO sauce(name, number, type) VALUES ('Spicy Garlic Parmesan',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt57), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt57);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt58 = "INSERT INTO sauce(name, number, type) VALUES ('Cajun Asian',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt58), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt58);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt59 = "INSERT INTO sauce(name, number, type) VALUES ('Garlic (choose from mild, medium, or hot)',null,'Flavored Wing Sauces')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt59), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt59);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt60 = "INSERT INTO menu(name, type, price, description) VALUES ('BBQ Ribs','Signature Pork BBQ',null,'Our pork BBQ baby back ribs are falling-off-the-bone tender! A rack of pork BBQ ribs, grilled and basted in your choice of our homemade sauces: Original BBQ, Honey BBQ, Spicy BBQ, or Garlic BBQ. Half Rack $15  Full Rack $20')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt60), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt60);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt61 = "INSERT INTO menu(name, type, price, description) VALUES ('BBQ Ribs Combo','Signature Pork BBQ',18,'Half-rack of ribs and your choice of one of the following: Wings (6-piece order in your choice of wing sauce), Boneless Wings (6-oz. order in your choice of wing sauce), Grilled BBQ Chicken Breast, or Smoked Pork BBQ.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt61), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt61);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt62 = "INSERT INTO menu(name, type, price, description) VALUES ('BBQ Sandwich','Signature Pork BBQ',10,'Smoked pork? BBQ served on a toasty bun with homemade coleslaw. Your choice of Carolina Style (vinegar-based sauce), or any of our other 4 homemade BBQ sauces.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt62), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt62);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt63 = "INSERT INTO menu(name, type, price, description) VALUES ('BBQ Sandwich','Sandwiches',10,'Smoked pork BBQ served on a toasty bun with homemade coleslaw. Your choice of Carolina Style (vinegar-based sauce), or any of our other 4 homemade BBQ sauces.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt63), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt63);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt64 = "INSERT INTO menu(name, type, price, description) VALUES ('Texas Club','Sandwiches',11,'A Texas-sized tower of honey-baked ham, smoked turkey, crisp Applewood smoked bacon, American and provolone cheeses, lettuce, tomato and onion. Served on 3 layers of thick Texas toast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt64), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt64);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt65 = "INSERT INTO menu(name, type, price, description) VALUES ('Sharkey's Super BLT','Sandwiches',9,'A stack of Applewood smoked bacon, lettuce, and tomato served on thick Texas toast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt65), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt65);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt66 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Bacon, Egg and Cheese Sandwich','Sandwiches',9,'Choice of 2 cheeses, melted and served on grilled Texas toast with a fried egg and Applewood smoked bacon.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt66), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt66);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Cheese with Bacon and Tomato','Sandwiches',9,'Your choice of 2 cheeses, served on Texas toast with Applewood smoked bacon and tomato.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Chicken Breast Sandwich','Chicken Sandwiches',10,'Braised with your choice of lemon butter, any BBQ sauce, or Cajun style, topped with lettuce, tomato and onion. Served with mayo on the side.  Add cheese and Applewood smoked bacon $1.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Jamaican Jerk Chicken Sandwich','Chicken Sandwiches',12.5,'Grilled chicken breast with our homemade Jamaican Jerk seasoning, topped with sweet and spicy Jamaican Relish, habanero-Jack cheese, Applewood smoked bacon, lettuce, tomato and onion.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Hawaiian Chicken Sandwich','Chicken Sandwiches',11.5,'Grilled chicken breast topped with Teriyaki sauce, 2 grilled pineapple rings, and provolone cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('California Chicken Sandwich','Chicken Sandwiches',12.50,'Grilled chicken breast coated in our #4 Hokie Hot Sauce, topped with crumbled bleu cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Buffalo  Chicken Sandwich','Chicken Sandwiches',11.50,'Braised with your choice of lemon butter, any BBQ sauce, or Cajun style, topped with lettuce, tomato and onion. Served with mayo on the side.  Add cheese and Applewood smoked bacon $1.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Philly Cheese Steak Sub','Subs',13,'Marinated and grilled steak with fresh mushrooms, onions and green peppers. Topped wwith melted white American cheese. Add lettuce, tomato and mayo at no extra charge.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Fajita Sub,'Subs',10,'A Sharkey's original! Chicken breast strips grilled with fresh green peppers, onions and spices, topped wwith melted habanero-jack cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Cajun Mahi-Mahi Po-Boy','Subs',13,'Wild-caught Mahi,? grilled with Cajun spices and served on a toasted sub roll with lettuce, tomato, onions, and chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Parmesan Sub','Subs',11,'Chicken tenders topped with marinara sauce and loads of mozzarella cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Cheeseburger Sub','Subs',12,'Our half-pound Blacksburger diced and grilled with sauteed mushrooms and onions, and loaded with American cheese. Served on a toasted sub roll.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Deli Sub','Subs',11,'Honey-baked ham and smoked turkey, topped with Applewood smoked bacon, provolone cheese, lettuce, tomato and onion. Served hot.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Buffalo Shrimp Po'Boy','Subs',13,'Spicy grilled buffalo shrimp served on a sub roll with lettuce and tomato, and finished with chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('The Blacksburger','Burgers',10,'A half-pound of the freshest ground beef, hand-pattied daily and flame-grilled to perfection. Served with lettuce, tomato, onion and mayo on the side.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Bison Burger','Burgers',11.5,'Fresh ground bison meat, seasoned and grilled, served on a bun with lettuce, tomato, onion and mayo on the side.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Steakhouse Burger','Burgers',12,'Topped with cheddar cheese, homemade crispy onion straws, Applewood-smoked bacon, LTO, and our soon-to-be-famous A1 Aioli!')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Black and Bleu Burger','Burgers',11,'Our Blacksburger piled high with bleu cheese, lettuce, tomato and onion.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('California Burger','Burgers',12,'Our Blacksburger topped with avocado, bacon, Swiss, lettuce, tomato, onion and homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Tex-Mex Burger','Burgers',11.5,'Topped with our homemade chili, habanero-jack cheese, and jalapenos.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Spin Dip Burger','Burgers',11.5,'Our Blacksburger topped with Spinach and Artichoke Dip, melted mozzarella, crushed red peppers, and L,T,O.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('BBQ Burger','Burgers',11.5,'Topped with a beer-battered onion ring, original BBQ sauce, and cheddar cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Patty Melt','Burgers',11,'Piled high with sauteed onions and provolone cheese. Served on Texas toast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Cheseeburger-Cheeseburger','Burgers',14,'The daddy of all ONE POUND Double Cheeseburgers! Served with American and provolone cheeses on a triple-decker bun. Substitute .75 lb Bison meat for an additional $3.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('No Name Burger','Burgers',11.5,'Stolen from the No Name Saloon in Park City, UT.Our Blacksburger topped with cream cheese and jalapenos and finished with our tangy chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Highlander Burger','Burgers',11.5,'Smothered in sweet and tangy Jamaican relish, habanero-jack cheese and jalapenos.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Crabby Patty Burger','Burgers',11.5,'Smothered in our famous Cajun Crab Dip, topped with cheddar/jack cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Hawaiian Burger','Burgers',11.5,'Topped with? teriyaki sauce, 2 grilled pineapple rings and provolone cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Breakfast Burger','Burgers',12,'Topped with? a fried egg, American cheese and Applewood smoked bacon. Served on Texas toast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Cheeseburger Sub','Burgers',12,'Our Blacksburger diced and grilled with sauteed mushrooms and onions, and loaded with American cheese. Served on a toasted sub roll.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Sauteed Mushroom, Onion and Swiss Burger','Burgers',11.5,'A classic! Add Applewood smoked bacon $1.50')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Gardenburger Veggie Patty','Burgers',10,'Flame-grilled and served on a toasted bun with lettuce, tomato, onion and mayo on the side.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Bison Cheeseburger Wrap,'Wraps',12,'Organic bison meat diced and cooked with sauteed mushrooms and onions, and finished with American and cheddar/jack cheeses, lettuce and tomato.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Philly Cheese Steak Wrap','Wraps',12,'Marinated and? grilled steak with fresh mushrooms, onions and green peppers, white American cheese, lettuce and tomato.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Avocado Dip Wrap','Wraps',11,'Grilled chicken, homemade Creamy Avocado Dip, crisp Applewood smoked bacon, lettuce, tomato, onion, jack/cheddar cheeses and homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Surf and Turf Wrap','Wraps',13,'Loaded with? grilled steak and grilled buffalo shrimp, lettuce, tomato, and finished with chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Pineapple Express Wrap','Wraps',10,'Stuffed with grilled buffalo shrimp, grilled pineapple, teriyaki sauce and provolone cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Deli Club Wrap','Wraps',10,'Honey-baked ham and smoked turkey, crisp Applewood smoked bacon, cheddar/jack cheese, lettuce, tomato, onion, and chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('California Turkey Wrap','Wraps',11,'Smoked turkey, crisp Applewood smoked bacon, avocado, lettuce, tomato, onion, jack/cheddar cheeses and homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Wing Wrap','Wraps',10,'Breaded or grilled chicken tenders, diced and tossed in your choice of wing sauce, and served with lettuce, tomato, onion, and jack and cheddar cheeses.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Caesar Wrap','Wraps',10,'Crisp romaine lettuce tossed in Caesar dressing and freshly grated Parmesan, rolled up with diced zesty chicken breast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Shrimp Caesar Wrap','Wraps',12,'Crisp romaine lettuce tossed in Caesar dressing and freshly grated Parmesan, rolled up with grilled zesty shrimp.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Veggie Wrap','Wraps',10,'Melted swiss and provolone with shredded lettuce, tomatoes, onions, green peppers, avocados, carrots, mushrooms, and mild banana peppers, topped with homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Seasoned Fries','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Waffle Fries','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Tater Tots','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Baked Potato','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Homemade Coleslaw','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Steamed Mixed Veggies','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Steamed Broccoli','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Coke','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Diet Coke','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Sprite','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Mello Yello','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Dr. Pepper','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Root Beer','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Ginger Ale','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Powerade','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Pink Lemonade','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Iced Tea','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('2% Milk','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Orange Juice','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Cranberry Juice','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Pineapple Juice','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Coffee','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt67 = "INSERT INTO menu(name, type, price, description) VALUES ('Hot Chocolate','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt67), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt67);
			if($result) { echo "Insert Successful\n<br/>";	}
		?>
		
		<h3>Insert Admin</h3>
		<?php
			$sqlStmt = "INSERT INTO Login (username, password) VALUES ('admin','admin')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
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