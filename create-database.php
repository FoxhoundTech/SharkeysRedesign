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
			
			//drops 1st table login page? dunno
			$SQLcmd = "DROP TABLE Login"; 
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd),"</tt><br/>\n";
			$results = mysqli_query($connect,$SQLcmd); 
			echo "Result of DROP: <tt>", htmlspecialchars($results), "</tt><br/>\n";
			
			//drops menu table
			$SQLcmd2 = "DROP TABLE menu";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd2),"</tt><br/>\n";
			$results2 = mysqli_query($connect, $SQLcmd2);
			echo "Result of DROP: <tt>", htmlspecialchars($results2),"</tt><br/>\n";
			
			//drops sauce table (table too saucy drop that b)
			$SQLcmd3 = "DROP TABLE sauce";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd3),"</tt><br/>\n";
			$results3 = mysqli_query($connect, $SQLcmd3);
			echo "Result of DROP: <tt>", htmlspecialchars($results3),"</tt><br/>\n";

			//drops beer table
			$SQLcmd4 = "DROP TABLE beer";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd4),"</tt><br/>\n";
			$results4 = mysqli_query($connect, $SQLcmd4);
			echo "Result of DROP: <tt>", htmlspecialchars($results4),"</tt><br/>\n";
			
			//Drop Event Table
			$SQLcmd5 = "DROP TABLE events";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd5),"</tt><br/>\n";
			$results5 = mysqli_query($connect, $SQLcmd5);
			echo "Result of DROP: <tt>", htmlspecialchars($results5),"</tt><br/>\n";
			
			//Drop unapproved Event Table
			$SQLcmd6 = "DROP TABLE declinedEvents";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd6),"</tt><br/>\n";
			$results6 = mysqli_query($connect, $SQLcmd6);
			echo "Result of DROP: <tt>", htmlspecialchars($results6),"</tt><br/>\n";
			
			//Drop Pending Events Table
			$SQLcmd7 = "DROP TABLE pendingEvents";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd7),"</tt><br/>\n";
			$results7 = mysqli_query($connect, $SQLcmd7);
			echo "Result of DROP: <tt>", htmlspecialchars($results7),"</tt><br/>\n";
			
			//Drop Specials
			$SQLcmd8 = "DROP TABLE specials";
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd8),"</tt><br/>\n";
			$results8 = mysqli_query($connect, $SQLcmd8);
			echo "Result of DROP: <tt>", htmlspecialchars($results8),"</tt><br/>\n";
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

		<h3>Create Beer DB</h3>
		<?php $query = "CREATE TABLE beer(name VARCHAR(50) PRIMARY KEY
											, type VARCHAR(100)
											, alcoholPercentage DECIMAL (3,1)
											, craftedLocation VARCHAR(50)
											, description VARCHAR(1500))"; //not sure if there is a better var to use, I saw nvchar on stackoverflow dunno
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		
		<h3>Create Events DB</h3>
		<?php $query = "CREATE TABLE events(id int NOT NULL AUTO_INCREMENT
													, contact VARCHAR(20)
													, type VARCHAR(20)
													, phone VARCHAR(20)
													, date DATE
													, email varchar(20)
													, guests INTEGER
													, comments VARCHAR(300)
													, PRIMARY KEY (id))"; 
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		
		<h3>Create Declined Events DB</h3>
		<?php $query = "CREATE TABLE declinedEvents(id int NOT NULL AUTO_INCREMENT
													, start DATE
													, end DATE
													, title VARCHAR(20)
													, declined_reason VARCHAR(30)
													, PRIMARY KEY (id))"; 
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		
		<h3>Create Pending Events DB</h3>
		<?php $query = "CREATE TABLE pendingEvents(id int NOT NULL AUTO_INCREMENT
													, contact VARCHAR(20)
													, type VARCHAR(20)
													, phone VARCHAR(20)
													, date DATE
													, email varchar(20)
													, guests INTEGER
													, comments VARCHAR(300)
													, PRIMARY KEY (id))"; 
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
		?>
		
		<h3>Create Specials DB</h3>
		<?php $query = "CREATE TABLE specials(name VARCHAR(50) PRIMARY KEY
												, type VARCHAR(10)
												, price DECIMAL(4,2)
												, description VARCHAR(1500)
												, url VARCHAR(30))"; 
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create:<tt>", htmlspecialchars($result), "</tt><br/>\n";
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
			
			$stmt68 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Chicken Breast Sandwich','Chicken Sandwiches',10,'Braised with your choice of lemon butter, any BBQ sauce, or Cajun style, topped with lettuce, tomato and onion. Served with mayo on the side.  Add cheese and Applewood smoked bacon $1.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt68), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt68);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt69 = "INSERT INTO menu(name, type, price, description) VALUES ('Jamaican Jerk Chicken Sandwich','Chicken Sandwiches',12.5,'Grilled chicken breast with our homemade Jamaican Jerk seasoning, topped with sweet and spicy Jamaican Relish, habanero-Jack cheese, Applewood smoked bacon, lettuce, tomato and onion.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt69), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt69);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt70 = "INSERT INTO menu(name, type, price, description) VALUES ('Hawaiian Chicken Sandwich','Chicken Sandwiches',11.5,'Grilled chicken breast topped with Teriyaki sauce, 2 grilled pineapple rings, and provolone cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt70), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt70);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt71 = "INSERT INTO menu(name, type, price, description) VALUES ('California Chicken Sandwich','Chicken Sandwiches',12.50,'Grilled chicken breast coated in our #4 Hokie Hot Sauce, topped with crumbled bleu cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt71), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt71);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt72 = "INSERT INTO menu(name, type, price, description) VALUES ('Buffalo  Chicken Sandwich','Chicken Sandwiches',11.50,'Braised with your choice of lemon butter, any BBQ sauce, or Cajun style, topped with lettuce, tomato and onion. Served with mayo on the side.  Add cheese and Applewood smoked bacon $1.5')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt72), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt72);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt73 = "INSERT INTO menu(name, type, price, description) VALUES ('Philly Cheese Steak Sub','Subs',13,'Marinated and grilled steak with fresh mushrooms, onions and green peppers. Topped wwith melted white American cheese. Add lettuce, tomato and mayo at no extra charge.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt73), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt73);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt74 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Fajita Sub,'Subs',10,'A Sharkey's original! Chicken breast strips grilled with fresh green peppers, onions and spices, topped wwith melted habanero-jack cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt74), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt74);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt75 = "INSERT INTO menu(name, type, price, description) VALUES ('Cajun Mahi-Mahi Po-Boy','Subs',13,'Wild-caught Mahi,? grilled with Cajun spices and served on a toasted sub roll with lettuce, tomato, onions, and chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt75), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt75);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt76 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Parmesan Sub','Subs',11,'Chicken tenders topped with marinara sauce and loads of mozzarella cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt76), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt76);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt77 = "INSERT INTO menu(name, type, price, description) VALUES ('Cheeseburger Sub','Subs',12,'Our half-pound Blacksburger diced and grilled with sauteed mushrooms and onions, and loaded with American cheese. Served on a toasted sub roll.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt77), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt77);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt78 = "INSERT INTO menu(name, type, price, description) VALUES ('Deli Sub','Subs',11,'Honey-baked ham and smoked turkey, topped with Applewood smoked bacon, provolone cheese, lettuce, tomato and onion. Served hot.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt78), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt78);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt79 = "INSERT INTO menu(name, type, price, description) VALUES ('Grilled Buffalo Shrimp Po'Boy','Subs',13,'Spicy grilled buffalo shrimp served on a sub roll with lettuce and tomato, and finished with chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt79), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt79);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt80 = "INSERT INTO menu(name, type, price, description) VALUES ('The Blacksburger','Burgers',10,'A half-pound of the freshest ground beef, hand-pattied daily and flame-grilled to perfection. Served with lettuce, tomato, onion and mayo on the side.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt80), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt80);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt81 = "INSERT INTO menu(name, type, price, description) VALUES ('Bison Burger','Burgers',11.5,'Fresh ground bison meat, seasoned and grilled, served on a bun with lettuce, tomato, onion and mayo on the side.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt81), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt81);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt82 = "INSERT INTO menu(name, type, price, description) VALUES ('Steakhouse Burger','Burgers',12,'Topped with cheddar cheese, homemade crispy onion straws, Applewood-smoked bacon, LTO, and our soon-to-be-famous A1 Aioli!')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt82), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt82);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt83 = "INSERT INTO menu(name, type, price, description) VALUES ('Black and Bleu Burger','Burgers',11,'Our Blacksburger piled high with bleu cheese, lettuce, tomato and onion.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt83), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt83);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt84 = "INSERT INTO menu(name, type, price, description) VALUES ('California Burger','Burgers',12,'Our Blacksburger topped with avocado, bacon, Swiss, lettuce, tomato, onion and homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt84), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt84);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt85 = "INSERT INTO menu(name, type, price, description) VALUES ('Tex-Mex Burger','Burgers',11.5,'Topped with our homemade chili, habanero-jack cheese, and jalapenos.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt85), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt85);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt86 = "INSERT INTO menu(name, type, price, description) VALUES ('Spin Dip Burger','Burgers',11.5,'Our Blacksburger topped with Spinach and Artichoke Dip, melted mozzarella, crushed red peppers, and L,T,O.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt86), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt86);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt87 = "INSERT INTO menu(name, type, price, description) VALUES ('BBQ Burger','Burgers',11.5,'Topped with a beer-battered onion ring, original BBQ sauce, and cheddar cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt87), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt87);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt88 = "INSERT INTO menu(name, type, price, description) VALUES ('Patty Melt','Burgers',11,'Piled high with sauteed onions and provolone cheese. Served on Texas toast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt88), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt88);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt89 = "INSERT INTO menu(name, type, price, description) VALUES ('Cheseeburger-Cheeseburger','Burgers',14,'The daddy of all ONE POUND Double Cheeseburgers! Served with American and provolone cheeses on a triple-decker bun. Substitute .75 lb Bison meat for an additional $3.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt89), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt89);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt90 = "INSERT INTO menu(name, type, price, description) VALUES ('No Name Burger','Burgers',11.5,'Stolen from the No Name Saloon in Park City, UT.Our Blacksburger topped with cream cheese and jalapenos and finished with our tangy chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt90), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt90);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt91 = "INSERT INTO menu(name, type, price, description) VALUES ('Highlander Burger','Burgers',11.5,'Smothered in sweet and tangy Jamaican relish, habanero-jack cheese and jalapenos.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt91), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt91);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt92 = "INSERT INTO menu(name, type, price, description) VALUES ('Crabby Patty Burger','Burgers',11.5,'Smothered in our famous Cajun Crab Dip, topped with cheddar/jack cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt92), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt92);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt93 = "INSERT INTO menu(name, type, price, description) VALUES ('Hawaiian Burger','Burgers',11.5,'Topped with? teriyaki sauce, 2 grilled pineapple rings and provolone cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt93), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt93);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt94 = "INSERT INTO menu(name, type, price, description) VALUES ('Breakfast Burger','Burgers',12,'Topped with? a fried egg, American cheese and Applewood smoked bacon. Served on Texas toast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt94), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt94);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt95 = "INSERT INTO menu(name, type, price, description) VALUES ('Cheeseburger Sub','Burgers',12,'Our Blacksburger diced and grilled with sauteed mushrooms and onions, and loaded with American cheese. Served on a toasted sub roll.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt95), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt95);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt96 = "INSERT INTO menu(name, type, price, description) VALUES ('Sauteed Mushroom, Onion and Swiss Burger','Burgers',11.5,'A classic! Add Applewood smoked bacon $1.50')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt96), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt96);
			if($result) { echo "Insert Successful\n<br/>";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$stmt97 = "INSERT INTO menu(name, type, price, description) VALUES ('Gardenburger Veggie Patty','Burgers',10,'Flame-grilled and served on a toasted bun with lettuce, tomato, onion and mayo on the side.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt97), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt97);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt98 = "INSERT INTO menu(name, type, price, description) VALUES ('Bison Cheeseburger Wrap,'Wraps',12,'Organic bison meat diced and cooked with sauteed mushrooms and onions, and finished with American and cheddar/jack cheeses, lettuce and tomato.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt98), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt98);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt99 = "INSERT INTO menu(name, type, price, description) VALUES ('Philly Cheese Steak Wrap','Wraps',12,'Marinated and? grilled steak with fresh mushrooms, onions and green peppers, white American cheese, lettuce and tomato.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt99), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt99);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt100 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Avocado Dip Wrap','Wraps',11,'Grilled chicken, homemade Creamy Avocado Dip, crisp Applewood smoked bacon, lettuce, tomato, onion, jack/cheddar cheeses and homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt100), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt100);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt101 = "INSERT INTO menu(name, type, price, description) VALUES ('Surf and Turf Wrap','Wraps',13,'Loaded with? grilled steak and grilled buffalo shrimp, lettuce, tomato, and finished with chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt101), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt101);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt102 = "INSERT INTO menu(name, type, price, description) VALUES ('Pineapple Express Wrap','Wraps',10,'Stuffed with grilled buffalo shrimp, grilled pineapple, teriyaki sauce and provolone cheese.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt102), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt102);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt103 = "INSERT INTO menu(name, type, price, description) VALUES ('Deli Club Wrap','Wraps',10,'Honey-baked ham and smoked turkey, crisp Applewood smoked bacon, cheddar/jack cheese, lettuce, tomato, onion, and chipotle sauce.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt103), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt103);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt104 = "INSERT INTO menu(name, type, price, description) VALUES ('California Turkey Wrap','Wraps',11,'Smoked turkey, crisp Applewood smoked bacon, avocado, lettuce, tomato, onion, jack/cheddar cheeses and homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt104), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt104);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt105 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Wing Wrap','Wraps',10,'Breaded or grilled chicken tenders, diced and tossed in your choice of wing sauce, and served with lettuce, tomato, onion, and jack and cheddar cheeses.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt105), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt105);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt106 = "INSERT INTO menu(name, type, price, description) VALUES ('Chicken Caesar Wrap','Wraps',10,'Crisp romaine lettuce tossed in Caesar dressing and freshly grated Parmesan, rolled up with diced zesty chicken breast.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt106), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt106);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt107 = "INSERT INTO menu(name, type, price, description) VALUES ('Shrimp Caesar Wrap','Wraps',12,'Crisp romaine lettuce tossed in Caesar dressing and freshly grated Parmesan, rolled up with grilled zesty shrimp.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt107), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt107);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt108 = "INSERT INTO menu(name, type, price, description) VALUES ('Veggie Wrap','Wraps',10,'Melted swiss and provolone with shredded lettuce, tomatoes, onions, green peppers, avocados, carrots, mushrooms, and mild banana peppers, topped with homemade ranch dressing.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt108), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt108);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt109 = "INSERT INTO menu(name, type, price, description) VALUES ('Seasoned Fries','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt109), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt109);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt110 = "INSERT INTO menu(name, type, price, description) VALUES ('Waffle Fries','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stm110), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt110);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt111 = "INSERT INTO menu(name, type, price, description) VALUES ('Tater Tots','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt111), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt111);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt112 = "INSERT INTO menu(name, type, price, description) VALUES ('Baked Potato','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt112), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt112);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt113 = "INSERT INTO menu(name, type, price, description) VALUES ('Homemade Coleslaw','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt113), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt113);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt114 = "INSERT INTO menu(name, type, price, description) VALUES ('Steamed Mixed Veggies','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt114), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt114);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt115 = "INSERT INTO menu(name, type, price, description) VALUES ('Steamed Broccoli','Side',null,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt115), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt115);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt116 = "INSERT INTO menu(name, type, price, description) VALUES ('Coke','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt116), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt116);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt117 = "INSERT INTO menu(name, type, price, description) VALUES ('Diet Coke','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt1117), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt117);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt118 = "INSERT INTO menu(name, type, price, description) VALUES ('Sprite','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt118), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt118);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt119 = "INSERT INTO menu(name, type, price, description) VALUES ('Mello Yello','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt119), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt119);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt120 = "INSERT INTO menu(name, type, price, description) VALUES ('Dr. Pepper','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt120), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt120);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt121 = "INSERT INTO menu(name, type, price, description) VALUES ('Root Beer','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt121), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt121);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt122 = "INSERT INTO menu(name, type, price, description) VALUES ('Ginger Ale','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt122), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt122);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt123 = "INSERT INTO menu(name, type, price, description) VALUES ('Powerade','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt123), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt123);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt124 = "INSERT INTO menu(name, type, price, description) VALUES ('Pink Lemonade','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt124), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt124);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt125 = "INSERT INTO menu(name, type, price, description) VALUES ('Iced Tea','Beverages',2.5,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt125), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt125);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt126 = "INSERT INTO menu(name, type, price, description) VALUES ('2% Milk','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt126), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt126);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt127 = "INSERT INTO menu(name, type, price, description) VALUES ('Orange Juice','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt127), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt127);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt128 = "INSERT INTO menu(name, type, price, description) VALUES ('Cranberry Juice','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt128), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt128);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt129 = "INSERT INTO menu(name, type, price, description) VALUES ('Pineapple Juice','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt129), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt129);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt130 = "INSERT INTO menu(name, type, price, description) VALUES ('Coffee','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt130), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt130);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt131 = "INSERT INTO menu(name, type, price, description) VALUES ('Hot Chocolate','Beverages',2.25,'Not Applicable')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt131), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt131);
			if($result) { echo "Insert Successful\n<br/>";	}

			///////////////////////////////////////////////////////////////////////////////////////
			
			$stmt132 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Cuvée Peach Belgian Tripel','Limited Edition Specialty Brews',9.0,'Hardywood Park Craft Brewery Richmond, VA', 'Hardywood Cuvée Peach is artfully blended by our barrel master from small batches of Peach Tripel aged in white wine barrels at varying levels of maturation from three months to more than a year. The resulting beer is beautifully complex with yeast derived stone fruit esters that harmonize with juicy peach undertones. This sparkling refresher offers a pleasantly dry finish with the slightest hint of vanilla from the toasted French Oak barrels.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt132), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt132);
			if($result) { echo "Insert Successful\n<br/>";	}

			//not sure if " " is acceptable in the description since it's highlighting it differently should ask

			$stmt133 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Kentucky Bourbon Barrel Coffee Stout Stout - Coffee','Limited Edition Specialty Brews',8.0,'Lexington Brewing & Distilling Co. Lexington, KY', 'Formerly simply Kentucky Bourbon Barrel Stout, Alltech has added Coffee to the label, but this is the same recipe was it was before. It was always a coffee stout. Kentucky Bourbon Barrel Stout® builds on the success of its barrel-aged brother, the beloved Kentucky Bourbon Barrel Ale®. Kentucky Bourbon Barrel Stout is brewed and aged with Alltech® Café Citadelle Haitian coffee and aged in world-famous Kentucky bourbon barrels. The result is a complex stout with dark-roasted malts, hints of caramel and vanilla and a lightly roasted coffee finish. PAIRING SUGGESTIONS — Big intense dishes, roast beef, lamb or game, grilled or roasted. Rich, moderately aged cheese. Chocolate peanut butter desserts, anything with toasted coconut. Hops: East Kent Goldings Malts: 2 Row Pale, Caramel 80, Chocolate Malt, Carapils Tasting Notes: Lightly sweet, notes of coffee, vanilla, caramel, toffee and oak. Light roasted coffee finish.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt133), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt133);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt134 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Andygator Bock - Maibock / Heller (Helles) / Lentebock','Limited Edition Specialty Brews',8.0,'Abita Brewing Company Abita Springs, LA', 'Andygator® is a fearsome beast. Don’t let his toothy grin, slightly sweet flavor and subtle fruit aroma fool you: this cold-blooded creature is a Helles Doppelbock that can sneak up on you. This unique, high-gravity brew is made with pale malt, German lager yeast and German Perle hops. Sip, don’t gulp, and taste the wild of Abita Andygator.®')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt134), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt134);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt135 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Cubano-style Espresso Brown Ale Brown Ale - English','Limited Edition Specialty Brews',5.5,'Cigar City Brewing  Tampa, FL', 'This Brown Ale is brewed with a heaping amount of Cubano-style espresso beans, vanilla and cacao nibs. Rich coffee notes dominate this beer, while it finds balance with a smooth malty backbone. Pairs well with arroz con leche and, of course, a delicate shot of Cubano espresso. Brewed with a proprietary blend of coffee beans produced in tandem with Buddy Brew Coffee in Tampa, Florida.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt135), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt135);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt136 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Black Butte XXX Porter - Imperial / Double','Limited Edition Specialty Brews',13.6,'Deschutes Brewery Bend, OR', 'N/A')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt136), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt136);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt137 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('MO Pale Ale - American','Limited Edition Specialty Brews',6.0,'Maine Beer Company Freeport, ME', 'Our first run at an American Pale Ale. Flavors and aromas of zesty citrus, passionfruit, and pine present themselves throughout. A very subtle malt sweetness for balance, but this is intended to finish dry.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt137), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt137);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt138 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Beligian White - Witbier','Premium Standards',5.4,'Blue Moon Brewing Company Denver, CO', 'Blue Moon Belgian White, Belgian-style wheat ale, is a refreshing, medium-bodied, unfiltered Belgian-style wheat ale spiced with fresh coriander and orange peel for a uniquely complex taste and an uncommonly smooth finish.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt138), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt138);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt139 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Guinness Draught - Stout - Irish Dry','Premium Standards',4.2,'Guinness St. James Gate, Dublin', 'Swirling clouds tumble as the storm begins to calm. Settle. Breathe in the moment, then break through the smooth, light head to the bittersweet reward. Unmistakeably GUINNESS, from the first velvet sip to the last, lingering drop. And every deep-dark satisfying mouthful in between. Pure beauty. Pure GUINNESS. Guinness Draught is sold in kegs, widget cans, and bottles. The ABV varies from 4.1 to 4.3%. Guinness Extra Cold is the exact same beer only served through a super cooler at 3.5 °C')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt139), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt139);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt140 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Two Hearted Ale - IPA - American','Premium Standards',7,'Bells Brewery Comstock, MI', 'Brewed with 100% Centennial hops from the Pacific Northwest and named after the Two Hearted River in Michigan’s Upper Peninsula, this IPA is bursting with hop aromas ranging from pine to grapefruit from massive hop additions in both the kettle and the fermenter. Perfectly balanced with a malt backbone and combined with the signature fruity aromas of Bell's house yeast, this beer is remarkably drinkable and well suited for adventures everywhere.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt140), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt140);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt141 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Vienna Lager - Lager - Vienna','Premium Standards',5.2,'Davils Backbone Brewing Company Roseland, VA', 'This is our Ol’ Faithful. No, it’s not a geothermal phenomenon. It’s the beer everybody, including professional beer judges, just seems to dig. Maybe they like how it’s smooth, medium-bodied, and semi-sweet, while not too heavy or bitter. Maybe it’s the amber color, or the blend of four imported malts balanced by two Germanic hops, or the fact that it takes five weeks to get right. Or maybe it’s all the above.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt141), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt141);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt142 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Pine Hop Le - IPA - American','Rotating Taps',6.8,'Evolution Craft Brewing Company Salisbury, MD', 'A tropical take on our classic American IPA; our pineapple IPA packs juicy fruit flavor with bold character. Brewed with loads of pineapple juice and aggressively hopped for big citrus notes.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt142), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt142);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt143 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Green Apple - Cider - Other','Rotating Taps',5,'McKenzie\'s Hard Cider Utica, NY', 'McKenzie's Green Apple Hard Cider has quite the kick. Maybe it's the deliciously crisp, slightly tart bite of green apples or the 5% alcohol.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt143), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt143);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt144 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Nitro Red Chair NWPA - Pale Ale - American','Rotating Taps',6.2,'Deschutes Brewery Bend, OR', 'The citrus punch of a big IPA, minus the one-dimensional hop sledgehammer. Seven select European and domestic malts round out the edges for a complex, copper-colored brew. Like its namesake skilift, it’s an insider’s ride to fresh thrills.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt144), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt144);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt145 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Cellar Series: Chocolate - Cider - Other','Rotating Taps',6.9,'Woodchuck Cidery Middlebury, VT', 'Woodchuck Cellar Series Chocolate features our original small batch hard cider, complemented by cacao beans. The infusion of crushed cacao beans brings notes of artisan chocolate throughout the nose and taste of the cider. A hint of caramel acccompanies the full apple flavor with a dry finish. Cellar Series Chocolate is one of the most unique ciders we have ever crafted, and we hope you enjoy it as much as we do. Cheers!')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt145), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt145);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt146 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Shower Beer - Pilsner - Czech','Rotating Taps',4.5,'Champion Brewing Company Charlottesville, VA', 'Perfect for any relaxing occasion, this Bohemian Pilsner sings with fresh, clean maltiness and spicy flavor and aroma contributions from 100% traditional Czech Saaz hops. Aged cold on Lager yeast for weeks for maximum refreshment. If you've never had a Shower Beer, it's high time. Winner of Gold Medal in the Bohemian-Style Pilsner category at the 2015 Great American Beer Festival.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt146), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt146);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt147 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Rebel Ale - Red Ale - American Amber/Red','Rotating Taps',5.8,'Shooting Creek Farm Brewery Floyd, VA', 'A great session beer for hot or cold weather. Brewed with malted barley and rye for a unique flavor-quenching zip, rich malt character, and deep amber glow. Moderately bittered using Cascade hops grown by Shooting Creek Farm brewery.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt147), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt147);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt148 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Nu Skool IPA - IPA - American','Rotating Taps',6,'Southern Tier Brewing Company Lakewood, NY', 'After over a year of prototyping R&D batches of Nu Skool IPA, this final version is one special beer. It’s an approachable, well-balanced IPA with slight malty sweetness that’s brimming with tropical, fruity, spicy, piney & citrus character. To contrast our IPA (brewed since 2002), which most closely resembles a traditional English IPA in malt & hop bills, we wanted to brew an IPA in a new way. Like craft brewers, hop farmers have come a long way. This beer showcases just how far we’ve come with alluring aromas & explosive flavors using only new American & experimental hops. There’s no need to add anything else. It’s time to graduate to the next level of hop flavors with Nu Skool IPA. HOP PROCESS: We used 3.5 lbs. of “new school” varieties of hops per barrel of beer. We load our hopback to the brim with Mosaic hops for a big tropical fruit character. A nice whirlpool dose of experimental hop #07270 gives the beer a flavorful, resinous character. We then dry hop this beer on two separate days with a large amount of Mosaic hops in our hop cannon & Simcoe + Equinox two days later.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt148), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt148);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt149 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Oberon Ale - Pale Wheat Ale - American','Rotating Taps',5.8,'Bell\s Brewery Comstock, MI', 'Bell's Oberon is a wheat ale fermented with Bell's signature house ale yeast, mixing a spicy hop character with mildly fruity aromas. The addition of wheat malt lends a smooth mouthfeel, making it a classic summer beer.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt149), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt149);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt150 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Bud Light - Lager - American','Standards',4.2,'Anheuser-Busch St. Louis, MO', 'Bud Light is brewed using a blend of premium aroma hop varieties, both American-grown and imported, and a combination of barley malts and rice. Its superior drinkability and refreshing flavor makes it the world’s favorite light beer.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt150), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt150);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt151 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Coors Light - Lager - American Light','Standards',4.2,'Coors Brewing Company Golden, CO', 'Coors Light is Coors Brewing Companys largest-selling brand and the fourth best-selling beer in the U.S. Introduced in 1978, Coors Light has been a favorite in delivering the ultimate in cold refreshment for more than 25 years. The simple, silver-toned can caught peoples attention and the brew became nicknamed the Silver Bullet as sales climbed.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt151), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt151);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt152 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Miller Lite - Lager - American Light','Standards',4.2,'Miller Brewing Company Milwaukee, WI', 'Our flagship brand, Miller Lite, is the great tasting, less filling beer that defined the American light beer category in 1975. We deliver a clear, simple message to consumers: \Miller Lite is the better beer choice.\" What's our proof? 1) Miller Lite is the original light beer. 2) Miller Lite has real beer taste because it's never watered down. 3) Miller Lite is the only beer to win four gold awards in the World Beer Cup for best American-style light lager. (2006)')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt152), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt152);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt153 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Traditional Lager - Lager - American Amber/Red','Standards',4.5,'Yuengling Brewery Pottsville, PA', 'Famous for its rich amber color and medium-bodied flavor with roasted caramel malt for a subtle sweetness and a combination of cluster and cascade hops, this true original delivers a well-balanced taste with very distinct character. Born from a historic recipe that was resurrected in 1987, Yuengling Traditional Lager is a true classic. Learn more: http://www.yuengling.com/lager')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt153), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt153);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt154 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Modelo Especial - Lager - North American Adjunct','Seasonal/Limited',4.5,'Grupo Modelo Mexico City, Distrito Federal', 'Modelo Especial, a pilsener type beer, was introduced to the market in 1966. Today it is sold in glass bottles as well as cans, which are having an increasing demand due to consumer preferences, making Modelo Especial the leader in the can segment in Mexico.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt154), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt154);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt155 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Passion Fruit Kicker - Fruit Beer','Seasonal/Limited',5.5,'Green Flash Brewing Company San Diego, CA', 'We’ve kicked it up a notch by adding a tropical twist to this refreshing ale. Get amped on Passion Fruit Kicker – a jaw-dropping, mouth-watering, smooth brew with sweet, tart, fruity flavor. We layer passion fruit tea and passion fruit juice with wheat malt and 2-row malted barley to bring you this exhilarating crowd pleaser. Your palate will do a 360 for more of this luscious wheat ale.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt155), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt155);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt156 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Nugget Nectar - Red Ale - Imperial/Double','Seasonal/Limited',7.5,'Tröegs Independent Brewing Hershey, PA', 'Squeeze those hops for all theyre worth and prepare to pucker up: Nugget Nectar Ale, will take hopheads to nirvana with a heady collection of Nugget, Warrior and Tomahawk hops. Starting with the same base ingredients of our flagship HopBack Amber Ale, Nugget Nectar intensifies the malt and hop flavors to create an explosive hop experience.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt156), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt156);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt157 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Milk Stout Nitro - Stout - Milk/Sweet','Seasonal/Limited',6,'Left Hand Brewing Company Longmont, CO', 'POUR HARD! Dark & delicious, America’s milk stout will change your perception about what a stout can be. Pouring hard out of the bottle, Milk Stout Nitro cascades beautifully, building a tight, thick head like hard whipped cream. The aroma is of brown sugar and vanilla cream, with hints of roasted coffee. The pillowy head coats your upper lip and its creaminess entices your palate. Initial roasty, mocha flavors rise up, with slight hop & roast bitterness in the finish. The rest is pure bless of milk chocolate fullness. Famous for their Nitro series, Left Hand Brewing was the first craft brewery to release a bottled nitrogenated beer. For the best experience, pour hard at 180 degrees into a 16oz glass. Different gas, different pour. Cheers! #PourHard')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt157), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt157);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt158 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Longboard Island Lager - Lager - Pale','Seasonal/Limited',4.6,'Kona Brewing Company Kailua Kona, HI', 'A smooth refreshing lager fermented and aged for five weeks at cold temperatures to yield its exceptionally smooth flavor. A delicate, slightly spicy hop aroma complements the malty body of this beer.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt158), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt158);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt159 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Strawberry Lager - Fruit Beer','Seasonal/Limited',4.2,'Abita Brewing Company Abita Springs, LA', 'The juice of red, ripe Louisiana strawberries, harvested at the peak of the season, gives this crisp lager its strawberry flavor, aroma and haze. Made with pilsner and wheat malts and Vanguard hops, all our Harvest Series brews are made with the finest Louisiana-grown ingredients.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt159), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt159);
			if($result) { echo "Insert Successful\n<br/>";	}
			
			$stmt160 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Bud Light Lager - American Light','Bottles/Cans',4.2,'Anheuser-Busch', 'Bud Light is brewed using a blend of premium aroma hop varieties, both American-grown and imported, and a combination of barley malts and rice. Its superior drinkability and refreshing flavor makes it the world’s favorite light beer.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt160), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt160);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt161 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Bud Light Lime Lager - American Light','Bottles/Cans',4.2,'Anheuser-Busch', 'N/A')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt161), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt161);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt162 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Budweiser Lager - North American Adjunct','Bottles/Cans',5,'Anheuser-Busch St. Louis, MO', 'Known as "The King of Beers," Budweiser was first introduced by Adolphus Busch in 1876 and it's still brewed with the same high standards today. Budweiser is a medium-bodied, flavorful, crisp American-style lager. Brewed with the best barley malt and a blend of premium hop varieties, it is an icon of core American values like optimism and celebration.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt162), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt162);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt163 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Coors Light Lager - American Light','Bottles/Cans',4.2,'Coors Brewing Company Golden, CO', 'Coors Light is Coors Brewing Companys largest-selling brand and the fourth best-selling beer in the U.S. Introduced in 1978, Coors Light has been a favorite in delivering the ultimate in cold refreshment for more than 25 years. The simple, silver-toned can caught peoples attention and the brew became nicknamed the as sales climbed.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt163), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt163);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt164 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Corona Extra Lager - North American Adjunct','Bottles/Cans',4.5,'Grupo Modelo Mexico City, Distrito Federal', 'Outside Mexico, Corona is often served with a wedge of citrus fruit - usually lime, occasionally lemon - inserted into the neck of the bottle. Within Mexico, especially in the south, Corona served with lime is not uncommon, but is not considered mandatory. Includes Coronita, Coronita Extra, Corona Mega and Corona Familiar. If you are having either a Michelada or a Corona-rita, please do not create a unique new beer since beer cocktails are not allowed.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt164), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt164);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt165 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Corona Light Lager - American Light','Bottles/Cans',3.9,'Grupo Modelo Mexico City, Distrito Federal', 'Outside Mexico, Corona is often served with a wedge of citrus fruit - usually lime, occasionally lemon - inserted into the neck of the bottle. Within Mexico, especially in the south, Corona served with lime is not uncommon, but is not considered mandatory.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt165), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt165);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt166 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Dales Pale Ale Pale Ale - American','Bottles/Cans',6.5,'Oskar Blues Brewery Longmont, CO', 'This voluminously hopped mutha delivers a hoppy nose and assertive-but-balanced flavors of pale malts and citrusy floral hops from start to finish. Oskar Blues launched its canning ops in 2002, brewing and hand-canning Dale’s Pale Ale in the Lyons, Colorado, brewpub. America’s first-craft-canned mountain pale is a hearty, critically acclaimed trailblazer that changed the way craft beer fiends perceive portable beer.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt166), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt166);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt167 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Hard Root Beer Root Beer','Bottles/Cans',5.8,'Coney Island Brewery Brooklyn, NY', 'Coney Island Hard Root Beer is a new twist on an old favorite. With hints of vanilla, licorice, and birch, this root beer will bring you back to the boardwalk.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt167), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt167);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt168 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Heineken Lager - Euro','Bottles/Cans',5,'Heineken Zoeterwoude, Zuid Holland', 'Heineken is a 5% ABV euro pale lager, made by Heineken International since 1873. It is available in a 4.3% alcohol by volume, in countries such as Ireland. It is the flagship product of the company and is made of purified water, malted barley, hops, and yeast. In 1886 H. Elion finished the development of the Heineken A-yeast. This is the yeast that is still used for the beer. The beer is force carbonated. It is popular in the United States, Europe and Middle Eastern countries.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt168), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt168);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt169 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Landshark Lager Lager - North American Adjunct','Bottles/Cans',4.6,'Margaritaville Brewing Co. St. Louis, MO', 'Born in Margaritaville, this island-style lager is a complex blend of hops and two-row caramel malts with a light, refreshing taste and a hint of malty sweetness.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt169), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt169);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt170 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Michelob ULTRA Lager - American Light','Bottles/Cans',4.2,'Anheuser-Busch  St. Louis, MO', 'N/A')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt170), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt170);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt171 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Miller Lite Lager - American Light','Bottles/Cans',4.2,'Miller Brewing Company Milwaukee, WI', 'Our flagship brand, Miller Lite, is the great tasting, less filling beer that defined the American light beer category in 1975. We deliver a clear, simple message to consumers: Miller Lite is the better beer choice. What's our proof? Miller Lite is the original light beer. Miller Lite has real beer taste because it's never watered down. Miller Lite is the only beer to win four gold awards in the World Beer Cup for best American-style light lager. (2006)')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt171), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt171);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt172 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Newcastle Brown Ale Brown Ale - English','Bottles/Cans',4.7,'John Smiths Tadcaster, North Yorkshire', 'Newcastle Brown Ale is a brand of beer produced by Heineken International. The beer was introduced in 1927 in Newcastle upon Tyne, England, by Newcastle Breweries, which became Scottish & Newcastle in 1960. In 2005, brewing was moved out of Newcastle for the first time to the other side of the River Tyne, to Dunston in Gateshead. In 2009, it was announced that production would move to Tadcaster North Yorkshire.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt172), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt172);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt173 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Orange Blossom Cream Ale Cream Ale','Bottles/Cans',5.2,'Buffalo Bills Brewery Hayward, CA', 'Reminiscent of the sweet fragrance of Spring, Orange Blossom Cream Ale is perfectly balanced, refreshing, light, and pleasant on the palate. It has hints of sweet orange peel, orange flower, and honey, 5.2% ABV.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt173), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt173);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt174 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Original Alcoholic Ginger Beer Ginger Beer','Bottles/Cans',4.8,'John Crabbie & Co Glasgow, City of Glasgow', 'For more than 200 years Crabbies has shipped its ginger beer from the Far East, following the pioneering footsteps of the first Scots Merchant Adventurers - hence our distinctive Elephant Trade Mark. Following a secret recipe, the steeped ginger is combined with quality ingredients and matured for 8 weeks to release a deliciously distinctive flavor.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt174), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt174);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt175 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Pabst Blue Ribbon Lager - North American Adjunct','Bottles/Cans',4.6,'Pabst Brewing Company Los Angeles, CA', 'This is the original Pabst Blue Ribbon Beer. Natures choicest products provide its prized flavor. Only the finest of hops and grains are used. Selected as Americas Best in 1893.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt175), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt175);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt176 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Passion Fruit Kicker Fruit Beer','Bottles/Cans',5.5,'Green Flash Brewing Company San Diego, CA', 'We’ve kicked it up a notch by adding a tropical twist to this refreshing ale. Get amped on Passion Fruit Kicker – a jaw-dropping, mouth-watering, smooth brew with sweet, tart, fruity flavor. We layer passion fruit tea and passion fruit juice with wheat malt and 2-row malted barley to bring you this exhilarating crowd pleaser. Your palate will do a 360 for more of this luscious wheat ale')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt176), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt176);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt177 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Red Stripe Lager - North American Adjunct','Bottles/Cans',4.7,'Desnoes & Geddes Kingston, Kingston', 'N/A')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt177), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt177);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt178 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Rolling Rock Extra Pale Lager - North American Adjunct','Bottles/Cans',4.4,'Latrobe Brewing Co. Saint Louis, MO', 'N/A')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt178), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt178);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt179 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Samuel Adams Boston Lager Lager - Vienna','Bottles/Cans',5,'Boston Beer Company Boston, MA', 'Samuel Adams Boston Lager® is the best example of the fundamental characteristics of a great beer, offering a full, rich flavor that is both balanced and complex. It is brewed using a decoration mash, a time consuming, traditional four vessel brewing process discarded by many contemporary brewers. This process brings forth a rich sweetness from the malt that makes it well worth the effort. Samuel Adams Boston Lager® also uses only the finest of ingredients including two row barley, as well as German Noble aroma hops. The exclusive use of two row barley not only imparts a full, smooth body but also gives the beer a wide spectrum of malt flavor ranging from slightly sweet to caramel to slightly roasted.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt179), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt179);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt180 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Stella Artois Lager - Euro','Bottles/Cans',5,'Stella Artois Leuven, Vlaams-Brabant', 'Stella Artois was first brewed as a Christmas beer in Leuven. It was named Stella from the star of Christmas, and Artois after Sebastian Artois, founder of the brewery. It is brewed to perfection using the original Stella Artois yeast and the celebrated Saaz hops. It is the optimum premium lager, with its full flavour and clean crisp taste.')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt180), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt180);
			if($result) { echo "Insert Successful\n<br/>";	}

			$stmt181 = "INSERT INTO beer(name, type, alcoholPercentage, craftedLocation, description) VALUES ('Virginia Apple Cider ','Bottles/Cans',4.7,'Bold Rock Hard Cider Nellysford, VA', 'Our bold cider makers crush apples from local Virginia orchards to create crisp and refreshing Virginia Apple. The fresh green taste of Granny Smith comes through in every sip!')";
			echo "Insert Statement: <code><pre>", htmlspecialchars($stmt181), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $stmt181);
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
		
		<h3>Insert Events</h3>
		<?php
			$sqlStmt = "INSERT INTO events (contact, type, phone, date, email, guests, comments) VALUES ('ITEC 472 Party', 'Work Party', '540-111-2222', '2019-04-08', 'test@drtest.com', 10, 'Party for all students. No profs allowed')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
		?>
		
		<h3>Insert Pending Event</h3>
		<?php
			$sqlStmt = "INSERT INTO pendingEvents(contact, type, phone, date, email, guests, comments) VALUES ('Dr. Test', 'Work Party', '540-111-1111', '2019-04-10', 'test@drtest.com', 10, 'I am so excited about booking through your new website')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
		?>
		
		<h3>Insert specials</h3>
		<?php
			$sqlStmt = "INSERT INTO specials(name, type, price, description, url) VALUES ('Free Burger Monday', 'food', null, 'Buy one, get one free on all burgers', 'images/burger-monday.png')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$sqlStmt = "INSERT INTO specials(name, type, price, description, url) VALUES ('6 Bucks 6 - 6 Choices!', 'food', 6, '$6 Lunch - Half Sub and Fries.', 'images/6bucks.jpg')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$sqlStmt = "INSERT INTO specials(name, type, price, description, url) VALUES ('Wings & More Buffet', 'food', null, 'Every Wednesday & Sunday, 5-9pm', 'images/wings-buffet.jpg')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$sqlStmt = "INSERT INTO specials(name, type, price, description, url) VALUES ('Trivia Night', 'food', null, 'Join us every Tuesday in Blacksburg and every Wednesday in Radford to win prizes!', 'images/trivia-night.jpg')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$sqlStmt = "INSERT INTO specials(name, type, price, description, url) VALUES ('Thoughtful Thursdays', 'food', null, 'Every Thursday we will donate 10% of food sales to a local charity!', 'images/thoughtful-thursday.jpg')";
			echo "INSERT Statement: <code><pre>", htmlspecialchars($sqlStmt), "</pre></code><br/>\n";
			$result = mysqli_query($connect, $sqlStmt);
			if($result) { echo "Insert Successful";	}
			else { echo "<strong>Insert Failure</strong>\n<br>/<br>/"; }
			
			$sqlStmt = "INSERT INTO specials(name, type, price, description, url) VALUES ('Veterans Day Special', 'food', null, 'One Free meal for all veterans, plus half-off all food for your family!', 'images/veterans-special.jpg')";
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