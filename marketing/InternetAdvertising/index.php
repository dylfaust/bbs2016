<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/elements/fullhead.php'); ?>
		<title>Web Development ::  <?php echo $GLOBALS['site_name'];?></title>
		<meta name="description" content="Buzzbizz Marketing">
		<link href="/css/dylStyle.css" rel="stylesheet" />  
	</head>
	<body class="main secondary web">
		<header id="header">
			<?php include 'nav.php' ?>
		</header>
		<main>
		<div class="top-section" id="top-section">
			<?php include 'marketing/internetAdvert/intro.php'; ?>
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
						Internet Advertising Campaigns
					</h1>
					<p>
					Choosing effective websites to advertise on can be as complicated as deciding how to display your message once have chosen sites. Buzzbizz Studios can help you choose the right sites, how to effectively display your campaign on those sites, and produce the creative to be displayed. We have a monetizing your investment down to the hour. Call the studio today to unlock the possibilities of the Internet. system in placing Internet advertising: plan, buy, probe, and tweak. The advantage you have with Internet advertising is that everything is traceable; you can monetize your investment down to the dollar. Call the studio today to unlock the possibilities of the Internet.
					</p>
					<hr>
				</div>
			</div>
		<h1 style="padding-top:30px;">Five Steps to Successful Internet Advertising</h1>
		</div>

		<div class="container advertising-directions">
		
	<div id="advert_instruct">
		<div class = "advert_step" id = "advert_step-01">
   			<img class = "transpImage" src="/img/advert_step-01.svg">
   			<div class = "advert_HeaderR">
				<h2 class = "advert_head">LOCATE</h2>
			</div>
			<div class = "advert_BodyL">
				<p class = "bodyText">There are a lot of websites you can advertise on, but few are the right fit. Each company will find different results from each site available. The first priority is to find the perfect fit for your product and target audience.</p>
			</div>
		</div>

		<div class = "advert_step" id = "advert_step-02">
   			<img class = "transpImage" src="/img/advert_step-02.svg" >
   			<div class = "advert_HeaderL">
				<h2 class = "advert_head">NEGOTIATE</h2>
			</div>
			<div class = "advert_BodyL">
				<p class = "bodyText">Many websites with advertising opportunities are runt independently. Others are part of Internet advertising networks and extended reach programs. Both scenarios present options for negotiation.</p>
			</div>
		</div>

		<div class = "advert_step" id = "advert_step-03">
   			<img class = "transpImage" src="/img/advert_step-03.svg" >
   			<div class = "advert_HeaderR">
				<h2 class = "advert_head">MESSAGE</h2>
			</div>
			<div class = "advert_BodyR">
				<p class = "bodyText">There are two main objectives to Internet advertising: brand awareness or call to action. It is imperative to create the right message with eye-catching creative to influence website visitors to take the action you want.</p>
			</div>
		</div>

		<div class = "advert_step" id = "advert_step-04">
   			<img class = "transpImage" src="/img/advert_step-04.svg" >
   			<div class = "advert_HeaderL">
				<h2 class = "advert_head">MEASURE</h2>
			</div>
			<div class = "advert_BodyL">
				<p class = "bodyText">Once the campaign is running, it is time to measure results. This can happen immediately, like the first day. Data is at our fingertips and we don’t have to wait as long as conventional media to start getting useful info.</p>
			</div>
		</div>

		<div class = "advert_step" id = "advert_step-05">
   			<img class = "transpImage" src="/img/advert_step-05.svg" >
   			<div class = "advert_HeaderR">
				<h2 class = "advert_head">TWEAK</h2>
			</div>
			<div class = "advert_BodyR">
				<p class = "bodyText">Taking what we learn from the data, we start making adjustments as needed. Sometime we may create parallel campaigns on the same site in order to see if one idea works better than another. A/B testing can be a game changer.</p>
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
		$("#internetAdvertising-website").addClass("active");
	</script>
	<script src="/js/matrix.js"></script>
</html>