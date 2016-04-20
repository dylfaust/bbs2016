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
			<?php include 'marketing/marketingAnEvent/intro.php'; ?>
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
						The Buzzbizz Studios' Checklist:
					</h1>
					<p>
					Buzzbizz Studios is your one-stop-shop for all your event marketing needs. If it is used to marketing before, during, or after and event - we can help you. Here is a list of the most popular things we have helped promoters produce and/or impliment successful event marketing campaigns.
					</p>
				</div>
			</div>
		</div>
		
		<div class="container advertising-directions">
	
			<div id="eventChecklist">
				<!-- Column 1 -->
				<div class = "col-md-6">
					
					<div class = "eventChecklist_step">
			   			<img class = "transpImage" src="/img/eventMarket.svg">
						<p class = "eventChecklist_bodyText">Design & print: posters, fliers, banners, signage, programs, & tickets</p>
					</div>

					<div class = "eventChecklist_step">
			   			<img class = "transpImage" src="/img/eventMarket.svg">
						<p class = "eventChecklist_bodyText">Plan & buy media: Strategize, plan, negotiate, and broker all media</p>
					</div>

					<div class = "eventChecklist_step">
			   			<img class = "transpImage" src="/img/eventMarket.svg">
						<p class = "eventChecklist_bodyText">Create splash page: Set-up custom web page for event</p>
					</div>

				</div>

				<!-- Column 2 -->
				<div class = "col-md-6">
						
						<div class = "eventChecklist_step">
				   			<img class = "transpImage" src="/img/eventMarket.svg">
							<p class = "eventChecklist_bodyText">Create advertisements: TV, radio, and Internet production</p>
						</div>

						<div class = "eventChecklist_step">
				   			<img class = "transpImage" src="/img/eventMarket.svg">
							<p class = "eventChecklist_bodyText">Coordinate Media: Leverage earned media where plausible</p>
						</div>

						<div class = "eventChecklist_step">
				   			<img class = "transpImage" src="/img/eventMarket.svg">
							<p class = "eventChecklist_bodyText">Deploy Social Campaign: Strategize, plan, & implement social media marketing</p>
						</div>

					</div>
				</div>
			</div>

		</div>
			

		<div class="off-the-grid">
			<h1>Events We Have Served</h1>
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
		$("#marketEvent-website").addClass("active");
	</script>
	<script src="/js/matrixStatic.js"></script>
</html>
