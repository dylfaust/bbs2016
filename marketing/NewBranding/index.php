<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/elements/fullhead.php'); ?>
		<title>Web Development ::  <?php echo $GLOBALS['site_name'];?></title>
		<link href="/css/dylStyle.css" rel="stylesheet" />
		<meta name="description" content="Buzzbizz Marketing">
	</head>
	<body class="main secondary web">
		<header id="header">
			<?php include 'nav.php' ?>
		</header>
		<main>
		<div class="top-section" id="top-section">
			<?php include 'marketing/newBranding/intro.php'; ?>
			<nav class="secondary with-needs landing" id="secondaryNav">
				<div class="container">
					<?php include 'marketing/nav.php'; ?>
				</div>
			</nav>
		</div>
		<div class="container text-align-center intro">
			<div class="row">
				<div class="col-xs-12">
					<h1>
						Three Keys to Successful Branding Campaigns
					</h1>
				</div>
			</div>
		</div>
		<div class="container advertising-directions">
			<div id = "threeKeys">
				
				<div class = "key">
					<div id = "key-01" class = "keyimg">
		   				<img class = "transpImage" src="/img/brandCamp-01.svg">
		   			</div>
					<p class = "key_bodyText"><b>The Look:</b> Every piece of collateral you put into circulation acts as an ambassador of your brand. From the colors you use to the fonts your pick, every detail must come together in a congruent and pointed manner to ensure everyone who comes into contact with your message feels exactly how you want them about your business.
					</p>
				</div>

				<div class = "key">
					<div id = "key-02" class = "keyimg">
		   				<img class = "transpImage" src="/img/brandCamp-02.svg">
		   			</div>
					<p class = "key_bodyText"><b>The Message:</b> Finding the right words are as important to your brand as the look. Crafting your message can be tricky, but with the right help, your message can propel your brand to new heights. Once you find the right words, it’s important to keep continuity while keeping an open mind in letting it grow and transform over time with the interests of your clients.
</p>
				</div>

				<div class = "key">
					<div id = "key-03" class = "keyimg">
		   				<img class = "transpImage" src="/img/brandCamp-03.svg">
		   			</div>
					<p class = "key_bodyText"><b>The Audience:</b> The key to a successful branding campaign is to make sure you are talking to the target demographic that will react to your message. Talking to the wrong audience doesn’t do much for your brand but waste time and money. Our expertise is keeping your message in front of people who will most likely respond to your brand.
</p>
				</div>

			</div>
		</div>
		<div class = "container text-align-center intro">

		<h1>Unlocking Branding Success</h1>
						<p>Once you have all the keys to branding success, you are ready to launch your branding campaign. The process starts with a marketing strategy, then depending on your strategy, you will need a medi buy plan, an Internet advertising campaign, a digital marketing campign, or all of the above. At Buzzbizz Studios we can take care of every step. Call today to see where we can take your brand.
						</p>
		</div>
		<br><br>
		<div class="off-the-grid">
			<h1>Non-Profits We Have Served</h1>
			<div class="existence">
				<div class="matrix" id="theMatrixStatic">
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/sportsman.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/fridays.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/dennys.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/renewal-01.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/gci.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/brightbeginnings.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/pairmore-young-01.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/aih.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
		<div class="ribbon orange">
			<div class="container">
				<h1>
					Ready to take your story to the World Wide Web?
				</h1>
				<a class="btn btn-block" href="#">Let's Talk</a>
			</div>
		</div>
		</main>
		<?php include 'video-background.php'; ?>
		<?php include 'footer.php'; ?>
	</body>
	<script>
		function start() {
			main();
			secondaryMain();
			parallax();
			storeMatrix();
		}
	</script>
	<?php include 'scripts.php'; ?>
	<script>
		window.onscroll = secondaryScroll;
		$(".nav-marketing").addClass("active");
		$("#brandingCampaign-website").addClass("active");
	</script>
	<script src="/js/matrixStatic.js"></script>
</html>
