<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sharkey's Wing and Rib Joint</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="sharkeys.css">
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
			
			<div class='social-feed pb-5'>
				<div class="container">
					<div class="row">
						<div class='radford-feed col-lg mx-auto'>
							<iframe class="card px-0 border shadow" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsharkeysradford%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
									width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
							</iframe>
						</div>
						<div class='blacksburg-feed col-lg mx-auto'>
							<iframe class="card px-0 border shadow" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsharkeys.blacksburg%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
									width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
							</iframe>
						</div>
					</div>
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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>