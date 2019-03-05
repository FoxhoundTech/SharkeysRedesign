<html>
	<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
		require_once("se_db_password.php"); 
		$connect = mysqli_connect("localhost", "jsimmons49", $mysql_password, "jsimmons49");
	?>
	<head>
		<title>Drinks</title>
		<link rel="stylesheet" href="sharkeys.css" type='text/css'>
	</head>
	
	<body>
		<?php require_once("navbar.php"); ?>
		
		<div class='content'>
			<div class="menu">
				<h1>Drinks</h1>
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
		
			<div class="specialty-brew-title">
				<h1>Limited Edition Specialty Brews<h1>
			</div>
			
			<div class="grid-container-b">
				<div class="grid-item">
					<h3>Cuvée Peach- Belgian Tripel<h3>
					<h4>9% ABV<h4>
					<h4>Hardywood Cuvée Peach is artfully blended by our barrel master from small batches of Peach Tripel aged in white wine barrels at varying levels of maturation from three months to more than a year. The resulting beer is beautifully complex with yeast derived stone fruit esters that harmonize with juicy peach undertones. This sparkling refresher offers a pleasantly dry finish with the slightest hint of vanilla from the toasted French Oak barrels.<h4>
				</div>
				<div class="grid-item">
					<h3>Kentucky Burbon Barrel Coffee Stout<h3>
					<h4>8% ABV<h4>
					<h4>Formerly simply "Kentucky Bourbon Barrel Stout," Alltech has added "Coffee" to the label, but this is the same recipe was it was before. It was always a coffee stout. Kentucky Bourbon Barrel Stout® builds on the success of its barrel-aged brother, the beloved Kentucky Bourbon Barrel Ale®. Kentucky Bourbon Barrel Stout is brewed and aged with Alltech® Café Citadelle Haitian coffee and aged in world-famous Kentucky bourbon barrels. The result is a complex stout with dark-roasted malts, hints of caramel and vanilla and a lightly roasted coffee finish. PAIRING SUGGESTIONS — Big intense dishes, roast beef, lamb or game, grilled or roasted. Rich, moderately aged cheese. Chocolate peanut butter desserts, anything with toasted coconut. Hops: East Kent Goldings Malts: 2 Row Pale, Caramel 80, Chocolate Malt, Carapils Tasting Notes: Lightly sweet, notes of coffee, vanilla, caramel, toffee and oak. Light roasted coffee finish. <h4>
				</div>
				<div class="grid-item">
					<h3>Andygator<h3>
					<h4>8% ABV<h4>
					<h4>Andygator® is a fearsome beast. Don’t let his toothy grin, slightly sweet flavor and subtle fruit aroma fool you: this cold-blooded creature is a Helles Doppelbock that can sneak up on you. This unique, high-gravity brew is made with pale malt, German lager yeast and German Perle hops. Sip, don’t gulp, and taste the wild of Abita Andygator.®<h4>
				</div>
				<div class="grid-item">
					<h3>Cubano-style Espresso Brown Ale<h3>
					<h4>5.5% ABV<h4>
					<h4>This Brown Ale is brewed with a heaping amount of Cubano-style espresso beans, vanilla and cacao nibs. Rich coffee notes dominate this beer, while it finds balance with a smooth malty backbone. Pairs well with arroz con leche and, of course, a delicate shot of Cubano espresso. Brewed with a proprietary blend of coffee beans produced in tandem with Buddy Brew Coffee in Tampa, Florida.<h4>
				</div>
				<div class="grid-item">
					<h3>Black Butte XXX Porter<h3>
					<h4><h4>
					<h4><h4> 
				</div>
				<div class="grid-item">
					<h3>MO Pale Ale<h3>
					<h4>6% ABV<h4>
					<h4>Our first run at an American Pale Ale. Flavors and aromas of zesty citrus, passionfruit, and pine present themselves throughout. A very subtle malt sweetness for balance, but this is intended to finish dry.<h4>
				</div>
				
			<div class="pale-ale-title">
				<h1>Pale Ales/Hoppy Beers<h1>
				<p>Bitter, in a good way!</p>
			</div>
			
			<div class="grid-container-c">
				<div class="grid-item">
					<h3>Pernicious IPA<h3>
					<h4> 7.3% ABV <h4>
					<h4>Formerly named East Side or Die IPA, Pernicious is our flagship India Pale Ale. With minimum malt complexity, we dry hop this beer with nearly twice the normal amount of hops typical to this style. The combination of juicy, tropical fruit-forward hops with heavy resinous American hops is the epitome of a West Coast IPA, made right here in the Southeast.<h4>
				</div>
				<div class="grid-item">
					<h3>Grapefruit Sculpin IPA<h3>
					<h4>7% ABV<h4>
					<h4>Our Grapefruit Sculpin is the latest take on our signature IPA. Some may say there are few ways to improve Sculpin’s unique flavor, but the tart freshness of grapefruit perfectly complements our IPA’s citrusy hop character. Grapefruit’s a winter fruit, but this easy-drinking ale tastes like summer.<h4>
				</div>
				<div class="grid-item">
					<h3>Mandarina IPA<h3>
					<h4>5% ABV<h4>
					<h4>Real oranges and citrusy hops blossom in this stunningly bright IPA.<h4>
				</div>
				<div class="grid-item">
					<h3>Pathfinder IPA<h3>
					<h4>4.3% ABV<h4>
					<h4><h4>
				</div>
				<div class="grid-item">
					<h3>Voodoo Ranger Liquid Paradise IPA<h3>
					<h4>7.8% ABV<h4>
					<h4>Using Mosaic Incognito, Azacca and Cascade hops, Liquid Paradise boasts a mélange of tropical notes to create a delicately bitter and extremely aromatic IPA.<h4>
				</div>
				<div class="grid-item">
					<h3>420 Strain G13 IPA<h3>
					<h4>6% ABV<h4>
					<h4>G13 IPA is a strange new strain, indeed. We took the dank hop profile you’d expect from a hazy IPA, and married it with terpenes and natural hemp flavors. The result is a big yet balanced IPA that mimics the aroma and taste of a heady, green G13. G13 IPA is a sticky super-hybrid that’s ready to rip. Pungent and dank aromatics on this terpene infused IPA fill the room once the beer is opened. We went with an aggressive dry hop schedule which interlaces nicely with the unique flavors to bring forward citrus and earthy notes followed by a resinous finish. This one’s fire! Columbus and Simcoe in the boil and dry hop!<h4>
				</div>
				<div class="grid-item">
					<h3>Two Hearts Ale IPA<h3>
					<h4>7% ABV<h4>
					<h4>Brewed with 100% Centennial hops from the Pacific Northwest and named after the Two Hearted River in Michigan’s Upper Peninsula, this IPA is bursting with hop aromas ranging from pine to grapefruit from massive hop additions in both the kettle and the fermenter. Perfectly balanced with a malt backbone and combined with the signature fruity aromas of Bell's house yeast, this beer is remarkably drinkable and well suited for adventures everywhere.<h4>
				</div>
			</div>
			
			<div class="dark-title">
				<h1>Black, Brown & Dark<h1>
			</div>
			
			<div class="grid-container-d">
				<div class="grid-item">
					<h3>No Veto<h3>
					<h4>5% ABV<h4>
					<h4>Give me liberty, or give me death! Our tribute to Patrick Henry, who not only left his mark on Virginia history, but was also one of our most beloved Founding Fathers. Henry led the opposition to the Stamp Act, but he was also central to arguing in a Virginia court against the King’s right to veto colonial laws. The Crown’s veto was nullified in his efforts and his argument was the first notch in a young Patrick Henry’s career. Cheers to the break from the Crown, Patty! Hope you enjoy our English Brown Ale as a tribute! This Northern English Brown Ale is filled with a variety of English malts giving it great caramel, nutty, toffee flavors with a touch of chocolate and even espresso. The English Hops offer the perfect balance to the complex malt sweetness, providing an earthy/grassy hop finish. Gold medal winner at 2015 Virginia Brewers Cup.<h4>
				</div>
				<div class="grid-item">
					<h3>Milk Stout Nitro<h3>
					<h4>6% ABV<h4>
					<h4>POUR HARD! Dark & delicious, America’s milk stout will change your perception about what a stout can be. Pouring hard out of the bottle, Milk Stout Nitro cascades beautifully, building a tight, thick head like hard whipped cream. The aroma is of brown sugar and vanilla cream, with hints of roasted coffee. The pillowy head coats your upper lip and its creaminess entices your palate. Initial roasty, mocha flavors rise up, with slight hop & roast bitterness in the finish. The rest is pure bless of milk chocolate fullness. Famous for their Nitro series, Left Hand Brewing was the first craft brewery to release a bottled nitrogenated beer. For the best experience, pour hard at 180 degrees into a 16oz glass. Different gas, different pour. Cheers! #PourHard<h4>
				</div>
				<div class="grid-item">
					<h3>Dunkin' Coffee Porter<h3>
					<h4>6% ABV<h4>
					<h4>We’ve counted on Dunkin’ to jumpstart our brew days from the beginning. Now we’re percolating with excitement to be able to cap our nights with this rich, roasty porter brewed with a little help from our friends at Dunkin’.<h4>
				</div>
				<div class="grid-item">
					<h3>Moo-Hoo Chocolate Milk Stout<h3>
					<h4>6% ABV<h4>
					<h4>The Terrapin “Moo-Hoo” Chocolate Milk Stout proudly uses cocoa nibs and shells from Olive and Sinclair Chocolate Company to give this beer its great taste!<h4>
				</div>
				<div class="grid-item">
					<h3>Guinness Draught<h3>
					<h4>4.2% ABV<h4>
					<h4>Swirling clouds tumble as the storm begins to calm. Settle. Breathe in the moment, then break through the smooth, light head to the bittersweet reward. Unmistakeably GUINNESS, from the first velvet sip to the last, lingering drop. And every deep-dark satisfying mouthful in between. Pure beauty. Pure GUINNESS. Guinness Draught is sold in kegs, widget cans, and bottles. The ABV varies from 4.1 to 4.3%. Guinness Extra Cold is the exact same beer only served through a super cooler at 3.5 °C<h4>
				</div>
			</div>
			
			<div class ="other-title">
				<h1>Other Faantastic Beers<h1>
			</div>
			
			<div class="grid-container-e">
				<div class ="grid-item">
					<h3>Smithwick's Red Ale<h3>
					<h4>4.5% ABV<h4>
					<h4>Smithwick's is a clear beer with a rich ruby color and creamy head. Clean and delicate aroma with different individual notes: from the top fermentation by the Smithwick yeast come aromatic esters creating a fruity aroma. The Aroma Hops added late in the boil contribute clean fresh floral notes. Ale Malt contributes aroma hints of biscuit and caramel. Refreshing and clean taste with a gentle balance of bitterness from the hops added early in the boil, sweet/malty notes from the ale malt, and hints of roast/coffee from the roasted barley. <h4>
				</div>
				<div class ="grid-item">
					<h3>Pomegranate Gose<h3>
					<h4>5.1% ABV<h4>
					<h4>Nothing says Autumn in Virginia like mild days and crisp nights so we put that feeling in a can. This German sour ale becomes a Fall favorite with the addition of the ancient flavors of pomegranate tartness from kettle-souring with lactobacillus gives the beer the same dry, crisp quality as those brisk nights. Fall never tasted so good. Leave you mark!<h4>
				</div>
				<div class ="grid-item">
					<h3>Cran Gose<h3>
					<h4>4% ABV<h4>
					<h4>Light. Tart. Fruity. These words don’t really pop in your head when you think of beer, but then again, there’s nothing quite like Cran Gose. We based this recipe on traditional gose brews, which are tart and light. The kicker is we loaded it up with mounds of cranberries, making it ruby-colored and a little peppier than your average gose.<h4>
				</div>
				<div class ="grid-item">
					<h3>Belgian White<h3>
					<h4>5.2%ABV<h4>
					<h4>We’ve shaken up traditional tastes by brewing a spiced Belgian-style wheat ale with real orange, lemon and lime peels, and then added a little coriander spice to the mix. This uniquely-crafted and award-winning ale is unfiltered to create a brew that is naturally cloudy with a light golden color and a smooth, refreshing finish.<h4>
				</div>
				<div class ="grid-item">
					<h3>Belgian White<h3>
					<h4>5.4% ABV<h4>
					<h4>Blue Moon Belgian White, Belgian-style wheat ale, is a refreshing, medium-bodied, unfiltered Belgian-style wheat ale spiced with fresh coriander and orange peel for a uniquely complex taste and an uncommonly smooth finish.<h4>
				</div>
				<div class ="grid-item">
					<h3>Vienna Lager<h3>
					<h4>5.2% ABV<h4>
					<h4>This is our Ol’ Faithful. No, it’s not a geothermal phenomenon. It’s the beer everybody, including professional beer judges, just seems to dig. Maybe they like how it’s smooth, medium-bodied, and semi-sweet, while not too heavy or bitter. Maybe it’s the amber color, or the blend of four imported malts balanced by two Germanic hops, or the fact that it takes five weeks to get right. Or maybe it’s all the above.<h4>
				</div>
			</div>
		
			<div class ="cider-title">
				<h1>Refreshing Ciders<h1>
			</div>
			
			<div class="grid-container-f">
				<div class ="grid-item">
					<h3>Ginger Turmeric<h3>
					<h4>4.7% ABV<h4>
					<h4><h4>
				</div>
				<div class ="grid-item">
					<h3>Crisp Apple<h3>
					<h4>5% ABV<h4>
					<h4>A crisp and refreshing cider, its fresh apple aroma and slightly sweet, ripe apple flavor make it hard to resist.<h4>
				</div>
			</div>
		
			<div class ="classic-title">
				<h1>The Classics - "Yellow Beer"<h1>
			</div>
			
			<div class="grid-container-g">
				<div class="grid-item">
					<h3>Bud Light<h3>
					<h4>4.2% ABV<h4>
					<h4>Bud Light is brewed using a blend of premium aroma hop varieties, both American-grown and imported, and a combination of barley malts and rice. Its superior drinkability and refreshing flavor makes it the world’s favorite light beer.<h4>
				</div>
				<div class="grid-item">
					<h3>Budweiser<h3>
					<h4>5% ABV<h4>
					<h4>Known as "The King of Beers," Budweiser was first introduced by Adolphus Busch in 1876 and it's still brewed with the same high standards today. Budweiser is a medium-bodied, flavorful, crisp American-style lager. Brewed with the best barley malt and a blend of premium hop varieties, it is an icon of core American values like optimism and celebration.<h4>
				</div>
				<div class="grid-item">
					<h3>Coors Light<h3>
					<h4>4.2% ABV<h4>
					<h4>Coors Light is Coors Brewing Company's largest-selling brand and the fourth best-selling beer in the U.S. Introduced in 1978, Coors Light has been a favorite in delivering the ultimate in cold refreshment for more than 25 years. The simple, silver-toned can caught people's attention and the brew became nicknamed the \Silver Bullet\" as sales climbed."<h4>
				</div>
				<div class="grid-item">
					<h3>Michelob ULTRA<h3>
					<h4>4.2% ABV<h4>
					<h4><h4>
				</div>
				<div class="grid-item">
					<h3>Miller Lite<h3>
					<h4>4.2% ABV<h4>
					<h4>Our flagship brand, Miller Lite, is the great tasting, less filling beer that defined the American light beer category in 1975. We deliver a clear, simple message to consumers: \Miller Lite is the better beer choice.\" What's our proof? 1) Miller Lite is the original light beer. 2) Miller Lite has real beer taste because it's never watered down. 3) Miller Lite is the only beer to win four gold awards in the World Beer Cup for best American-style light lager. (2006)<h4>
				</div>
				<div class="grid-item">
					<h3>Traditional Lager<h3>
					<h4>4.5% ABV<h4>
					<h4>Famous for its rich amber color and medium-bodied flavor with roasted caramel malt for a subtle sweetness and a combination of cluster and cascade hops, this true original delivers a well-balanced taste with very distinct character. Born from a historic recipe that was resurrected in 1987, Yuengling Traditional Lager is a true classic. Learn more: http://www.yuengling.com/lager<h4>
				</div>
			</div>
		
		<div class ="other-title">
				<h1>Other Faantastic Beers<h1>
			</div>
			
			<div class="grid-container-h">
				<div class= "grid-item">
					<h3>60 Minute IPA<h3>
					<h4>6% ABV<h4>
					<h4>60 Minute IPA is continuously hopped -- more than 60 hop additions over a 60-minute boil. Getting a vibe of where the name came from? 60 Minute is brewed with a slew of great Northwest hops. A powerful but balanced East Coast IPA with a lot of citrusy hop character, it's the session beer for hardcore enthusiasts!<h4>
				</div>
				<div class= "grid-item">
					<h3>Arrogant Bastard Ale<h3>
					<h4>7.2% ABV<h4>
					<h4>This is an aggressive ale. You probably won’t like it. It is quite doubtful that you have the taste or sophistication to be able to appreciate an ale of this quality and depth. We would suggest that you stick to safer and more familiar territory–maybe something with a multi-million dollar ad campaign aimed at convincing you it’s made in a little brewery, or one that implies that their tasteless fizzy yellow beverage will give you more sex appeal. Perhaps you think multi-million dollar ad campaigns make things taste better. Perhaps you’re mouthing your words as you read this.<h4>
				</div>
				<div class= "grid-item">
					<h3>Bass Pale Ale<h3>
					<h4>5% ABV<h4>
					<h4>A classic pale ale. This version of Bass for the North American market at 5% to comply with USA ale regulations.<h4>
				</div>
				<div class= "grid-item">
					<h3>Black Bear<h3>
					<h4>10.1% ABV<h4>
					<h4><h4>
				</div>
				<div class= "grid-item">
					<h3>Blue<h3>
					<h4>4.6% ABV<h4>
					<h4>Sweetwater Blue is a unique light bodied ale enhanced with a hint of fresh blueberries. This euphoric experience begins with an appealing blueberry aroma and finishes as a surprisingly thirst-quenching ale. Malt Bill: 2 Row, Wheat Hops: Centennial Drinking Options: Draft, 12 oz. 6-Pack Bottles & 12 oz. 6-Pack Cans<h4>
				</div>
				<div class= "grid-item">
					<h3>Bourbon Barrel Baltic Sunrise<h3>
					<h4>10.4% ABV<h4>
					<h4>A robust porter with an invigorating aroma of freshly brewed coffee. Full-bodied and rich, our Baltic Porter is nuanced with hints of dark cherry that meld beautifully with a rounded chocolate malt backbone. Months of maturation in bourbon barrels lend a comforting warmth that is followed by toasted oak and a balanced touch of vanilla for a smooth finish<h4>
				</div>
				<div class= "grid-item">
					<h3>Bud Light<h3>
					<h4>4.2% ABV<h4>
				</div>
				<div class= "grid-item">
					<h3>Bud Light Lime<h3>
					<h4>4.2% ABV<h4>
				</div>
				<div class= "grid-item">
					<h3>Bud Light Orange<h3>
					<h4>4.2% ABV<h4>
				</div>
				<div class= "grid-item">
					<h3>Budweiser<h3>
					<h4>5% ABV<h4>
				</div>
				<div class= "grid-item">
					<h3>Carlsberg<h3>
					<h4>5% ABV<h4>
					<h4>Probably the best beer in the world, and the flagship brand in Carlsberg Group's portfolio. A regular in millions of bars across 140 countries worldwide, it is a truly international beer brand. Hordeum vulgare. That’s the Latin name for barley, but there’s nothing vulgar about it. In fact, it is a rather special malting barley we use. We have our own Barley Breeding Group, which works in close contact with our brewmasters. The group selects the barley with the best traits and grows it in our research fields, using only traditional breeding methods, 100% free of genetic modifications. Considering that Carlsberg is made from 100% pure malt i.e. no adjuncts it could take some years before we breed the necessary amount of barley. Probably worth the effort. Hops are our secret ingredient. Of course it is no secret that we use hops in our beer, but the types we use are prepared according to a secret recipe that’s exclusive to us. It’s called the Carlsberg Aroma Hop Extract and nobody but us at Carlsberg can use it. After all, there can only be one best beer in the world. Yeast is at the heart of our history. In 1879, Carlsberg was the first brewery to produce a purified brewer’s yeast, the Saccharomyces Carlsbergensis. Since then we’ve been constantly working to improve our yeast’s taste and the stability of our beer. We do it by using a classic breeding method, which means it can take up to 20 trials and several years to obtain a new yeast strain that’s good enough for brewing<h4>
				</div>
				<div class= "grid-item">
					<h3>Cherry Goose<h3>
					<h4>4.2% ABV<h4>
				</div>
				<div class= "grid-item">
					<h3>Chimay Triple<h3>
					<h4>8% ABV<h4>
					<h4>Named Cinq Cents in 75 cl (25.4 fl.oz.) bottles, this beer, with its typical golden color, slightly hazy appearance and fine head, is especially characterized by its aroma which results from an agreeable combination of fresh hops and yeast. It was first brewed by the monks of Chimay at Scourmont Abbey in 1966. Above all it is the fruity notes of muscat and raisins that give this beer a particularly attractive aroma.<h4>
				</div>
				<div class= "grid-item">
					<h3>Colima Lime<h3>
					<h4>5% ABV<h4>
					<h4>Truly Spiked & Sparkling™ Colima Lime has a slight tartness with a crisp but subtle sweetness.<h4>
				</div>
				<div class= "grid-item">
					<h3>Coorse Light<h3>
					<h4>4.2% ABV<h4>
					<h4>Coors Light is Coors Brewing Company's largest-selling brand and the fourth best-selling beer in the U.S. Introduced in 1978, Coors Light has been a favorite in delivering the ultimate in cold refreshment for more than 25 years. The simple, silver-toned can caught people's attention and the brew became nicknamed the \Silver Bullet\" as sales climbed."<h4>
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