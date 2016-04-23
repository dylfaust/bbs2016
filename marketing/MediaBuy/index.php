<!DOCTYPE html>
<html lang="en">
	<head>
	<link href="/css/dylStyle.css" rel="stylesheet" />  
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
			<?php include 'marketing/mediaBuy/intro.php'; ?>
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
						Creating a Media Buy Plan
					</h1>
					<p>
					Buzzbizz Studios offers a unique blend of science, awareness, and gut when creating result-oriented media buying strategies for your company. It’s important to start with the study of microeconomics, couple it with a firm grasp of socioeconomics, and demographic segmentation. Then we pair what the science tells us with an awareness of our community. Top it all off with a touch of gut and you end up with intuitive buying strategies as unique as the companies they are engineered for.
					</p>
				</div>
			</div>
		</div>
<div class="marketing-container">
	
	<div class = "mediaProcess_small">
		<img class = "transpImage" src="/img/mediaBuy_small.svg">
	</div>

	<div class = "mediaProcess">
		<img class = "transpImage" src="/img/mediaProcess.svg">
		<p id = "mediaProcess_Title">MEDIA<br>BUYING<br>PROCESS</p>

		<div id = "mediaProcess-01">
			<h2 id = "mediaProcess_Num-01">01</h2>
			<h2 id = "mediaProcess_Head-01">PLAN</h2>
			<div id = "mediaProcess_Body-01">
				<p class = "mediaProcess_BodyTextWide">We take in your product and your target demographic and lay out a plan that matches your budget and ability to handle the new incoming sales.</p>
			</div>
		</div>

		<div id = "mediaProcess-02">
			<h2 id = "mediaProcess_Num-02">02</h2>
			<h2 id = "mediaProcess_Head-02">BUY</h2>
			<div id = "mediaProcess_Body-02">
				<p class = "mediaProcess_BodyTextTall">We go to bat for you garnering the best buy for the buck we can get. You get the benefits of our strong buying power and relationships with media outlets.</p>
			</div>
		</div>	

		<div id = "mediaProcess-03">
			<h2 id = "mediaProcess_Num-03">03</h2>
			<h2 id = "mediaProcess_Head-03">PROBE</h2>
			<div id = "mediaProcess_Body-03">
				<p class = "mediaProcess_BodyTextWide">We analyze the results of your media buy and probe into what worked and what needs work moving forward. This is a team effort between you and BBS.</p>
			</div>
		</div>	

		<div id = "mediaProcess-04">
			<h2 id = "mediaProcess_Num-04">04</h2>
			<h2 id = "mediaProcess_Head-04">TWEAK</h2>
			<div id = "mediaProcess_Body-04">
				<p class = "mediaProcess_BodyTextTall">Taking what was learned from probing, we start tweaking our buying strategy. This affects the overall plan, so we start the process over ensuring ongoing effectiveness.</p>
			</div>
		</div>	

	</div>
</div>
		
		<div class="ribbon orange">
			<div class="container">
				<h1>
					Ready to talk about your media strategy?
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
		$("#mediaBuy-website").addClass("active");
	</script>
	<script src="/js/matrix.js"></script>
</html>
