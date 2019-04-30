<!doctype html>
<html>
	<head>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="sharkeys.css">
	</head>
	
	<body>
		<?php require_once('navbar.php'); ?>
		
		<div class='content pt-2 pb-5'>
			<h1 class="text-center mb-5">Locations</h1>
			<div class='blacksburg-location'>
				<div class="container">
					<div class="row">
						<div class="col-sm px-0 mr-2">
							<img src="http://nebula.wsimg.com/20cf247dd79d68651d85612a95693b41?AccessKeyId=3AF9510BFFDF9C352E2C&disposition=0&alloworigin=1" alt="Sharkey's Blacksburg"/>
							<h5 class="mt-5">Sharkey's Blacksburg</h5>
							<h5>220 North Main Street - Blacksburg, VA 24060</h5>
							<h5>(540) 552-2030​​</h5>
						</div>
						<div class="col-sm mx-auto">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176.718285014427!2d-80.41730508435847!3d37.230662051048924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884d95748e26a36b%3A0x70c5a6091c0cfeca!2sSharkeys!5e0!3m2!1sen!2sus!4v1556384059092!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			
			<hr class="ml-5 mr-5" style="border-color: white"/>
			
			<div class='radford-location'>
				<div class="container">
					<div class="row">
						<div class="col-sm px-0 mr-2">
							<img src="http://nebula.wsimg.com/de31a96b2ac65795cd38730c9129d470?AccessKeyId=3AF9510BFFDF9C352E2C&disposition=0&alloworigin=1" alt="Sharkey's Radford"/>
							<h5 class="mt-5">Sharkey's Radford</h5>
							<h5>1202 East Main Street - Radford, VA 24141</h5>
							<h5>(540) 267-3434​</h5>
						</div>
						<div class="col-sm mx-auto">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3180.460414974672!2d-80.55753944297854!3d37.14175039582355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884dee8ee692351d%3A0x1c56f630b5cdcc50!2sSharkey&#39;s+Wing+%26+Rib+Joint!5e0!3m2!1sen!2sus!4v1556383959721!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php require_once('footer.php'); ?>
		
		<script>
			function updateNavbar() {
				document.getElementById('location').className += " active";
			}
			
			updateNavbar();
		</script>		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>