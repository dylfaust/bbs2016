<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/elements/fullhead.php'); ?>
		<title>Web Development ::  <?php echo $GLOBALS['site_name'];?></title>
		<meta name="description" content="Buzzbizz Marketing">
	</head>
	<body class="main secondary web">
		<header id="header">
			<?php include 'nav.php' ?>
		</header>
		<main>
		<div class="top-section" id="top-section">
			<?php include 'marketing/marketServices/intro.php'; ?>
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
						Your marketing fiduciary
					</h1>
					<p>
					Buzzbizz Studios’ marketing services are best suited for small to medium sized businesses and non-profit organizations. Regardless of your size or budget, we take it upon ourselves to become your marketing fiduciary – always and truly working in your best marketing interests. We take the honor of helping you with your success very seriously. We believe your success is our success and in achieving that success we will always act in your best interest. This means our interests can never be a part of your marketing plan. We promise to sacrifice your needs to advance any of our own.
					<br><br>
					What this all means is that your marketing campaign isn’t treated as a stepping-stone to the next big account or fodder for our awards shelf. It means we keep your marketing on time, on target, on budget, and are always working on making it better. So if you have heard the horror stories of the large agency experience or are coming out of a bad experience yourself, please come see the Buzzbizz Studios difference. We always start with a complimentary no obligation consultation to get a taste for our marketing flavor and be sure that we are the right fit for your situation.
					</p>
					<hr>
				</div>
			</div>
		</div>
		
		<div class="off-the-grid">
			<h1>Brands We've Worked With</h1>
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
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/oreck.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/bristolbaynative.png" alt="">
							</div>
						</div>
					</div>
					<div class="item">
						<div class="item-control">
							<div class="item-control-body">
								<!--<h4>Alborn Construction</h4>-->
								<img src="/img/brands/ohana.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ribbon orange">
			<div class="container">
				<h1>
					Ready to take your brand to the next level?
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
		$("#marketingServices-website").addClass("active");
	</script>
	<script src="/js/matrixStatic.js"></script>
</html>
