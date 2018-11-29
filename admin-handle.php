<?php
	error_reporting(e_all);
	/*
		Sharkey's Website Redesign 
		Created by Foxhound Tech
		
		Admin-Handle Page
	*/
	$title="Admin Control Panel";
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="sharkeys.css">
		<title> <?php echo $title ?> </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			require_once("se_db_password.php"); 
			$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");

			if (mysqli_connect_error()) { echo "Error details: ", mysqli_connect_error(), "\n"; }
			
			$user = $_POST['username'];
			$pass = $_POST['password'];
			
			//Fetch 
			$SQLcmd = "SELECT * FROM Login WHERE username = '$user'";
			$results = mysqli_query($connect,$SQLcmd); 
			$row=mysqli_fetch_assoc($results);
			
			$db_username = $row['username'];
			$db_password = $row['password'];
			
			//If Password and username is correct
			if ($user === $db_username && $pass === $db_password) {
				echo "<p class='db-response'>Successful Login.  Final iteration will contain admin controls </p>";
			}
			else {
				echo "<p class='db-response'>Invalid Login</p>"; ?> <br/><a href="https://php.radford.edu//~jsimmons49/SEProject/admin.php">Return to Login</a>
			<?php }
			$close_result = mysqli_close($connect);		?> 
	
	</body>
</html>