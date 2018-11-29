<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
	</head>
	
	<body>
		<div class="topnav" id="myTopnav">
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
			<a href="#locations">Locations</a>
			<a href="#events">Events</a>
			<a href="#specials">Specials</a>
			<a href="#drinks">Drinks</a>
			<a href="#menu">Menu</a>
			<a href="#home" class="active">Home</a>
		</div>
	</body>
</html>
