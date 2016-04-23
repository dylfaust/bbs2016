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
			<?php include 'marketing/fundraisingCamp/intro.php'; ?>
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
						Fundraising Campaigns
					</h1>
					<p>
					Fundraising campaigns can be tricky because many times, funds are extremely tight and media outlets are swamped with request for free airtime everyday. This is where Buzzbizz Studios’ creative buying strategies mixed with carefully planned gorilla marketing tactics can become force multipliers for your cause. It is our job to help you find the best way to leverage your volunteer and limited currency resources. With a mix of good will from the media and public, creative marketing strategies, and heart tugging messaging we find ways to help you reach your fundraising goals.
					</p>
					<hr>
				</div>
			</div>
		</div>
		
		</div>
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
					Need help with your fundraising campaign?
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
		$("#fundraisingCampaign-website").addClass("active");
	</script>
	<script src="/js/matrixStatic.js"></script>
</html>
