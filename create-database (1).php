<?php 
	error_reporting(e_all)
	/*
		Create the databases for Sharkey's website redesign
		
		MAKE SURE TO CHANGE $connect username to jsimmons49
	*/
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
		<h3>Drop the table</h3>
		<?php
			$SQLcmd = "DROP TABLE Login"; 
			echo "DROP statement: <br/><tt>",htmlspecialchars($SQLcmd),"</tt><br/>\n";
			$results = mysqli_query($connect,$SQLcmd); 
			echo "Result of DROP: <tt>", htmlspecialchars($results), "</tt><br/>\n";
		?>
		<h3>Create new Table</h3>
		<?php
			$query = "CREATE TABLE Login(username VARCHAR(20) PRIMARY KEY
											, password VARCHAR(20))";
			echo "CREATE statement: <br/><tt>", htmlspecialchars($query),"</tt><br/>\n";
			$result = mysqli_query($connect, $query);
			echo "Result of Create: <tt>", htmlspecialchars($result), "</tt><br/>\n";
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