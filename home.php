<html>
	<head>
		<title>Sharkey's Wing and Rib Joint</title>
		<link rel="stylesheet" href="sharkeys.css" type='text/css'>
	</head>
	
	<body>
		<?php require_once('navbar.php'); ?>
		
		<div class='content'>
			<div class='header'>
				<img src='http://nebula.wsimg.com/f7e261adb16376df07825ca79d49b2ca?AccessKeyId=3AF9510BFFDF9C352E2C&disposition=0&alloworigin=1'/>
				<h1>Sharkey's Wing and Rib Joint!</h1>
			</div>
			
			<div class='welcome'>
				<h3>Welcome!</h3>
				<p>
					Located in Blacksburg and Radford, Virginia, we have been proudly serving the best wings, ribs, and burgers in the New River Valley
					since 1992!
					<br/>
					Looking for a great craft beet, a spot to watch the big game, or a place to bring the whole family? Look no further! With daily specials, a friendly staff, and amazing food, it's no wonder that Sharkey's is
					<br/>
					<b>Where Good Friends Go™!</b>
				</p>
				<br/><br/>
				<h3>Check out our social media!</h3>
			</div>
			
			<div class='social-feed'>
				<div class='radford-feed'>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsharkeysradford%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
							width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
					</iframe>
				</div>
				<div class='blacksburg-feed'>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsharkeys.blacksburg%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
							width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
					</iframe>
				</div>
			</div>
		</div>
		
		<br/><br/>
		
		<?php require_once('footer.php'); ?>
		
		<script>
			function updateNavbar() {
				document.getElementById('home').className += " active";
			}
			
			updateNavbar();
		</script>
	</body>
</html>