var width;
var height;
var minH = 788;
function getWindowAttributes() {
	width = window.innerWidth
		|| document.documentElement.clientWidth
		|| document.body.clientWidth;
	height = window.innerHeight
		|| document.documentElement.clientHeight
		|| document.body.clientHeight;
}
function loadCustomScrollBars() {
	$("html").niceScroll({
		zindex: "999999999",
		background: "rgba(255,102,51,0.5)",
		cursorcolor: "#08162C",
		cursorborder: "1px solid #FF6633",
		cursorwidth: "10px",
		cursorborderradius: "10px",
		cursoropacitymin: 0,
		cursoropacity: .8,
		scrollspeed: 60,
		mousescrollstep: 60,
		hwacceleration: true,
		bouncescroll: true
	});
}
function removeCustomScrollBars() {
	$("html").getNiceScroll().remove();
}
function parallax() {
	getWindowAttributes();
	if (width > 544) {
		$(".parallax-item").css('background-attachment', 'fixed');
		$.stellar({
			horizontalOffset: 0,
			positionProperty: 'position',
			parallaxBackgrounds: true,
			responsive: false,
			horizontalScrolling: false,
			verticalScrolling: true
		});
	} 
}
function main() {
	//console.log("javascript has loaded");
	loadCustomScrollBars();
	fixedNav();
}
function secondaryMain() {
	secondaryNav();
}
function fixedNav() {
	var body = document.body;
	var html = document.documentElement;
	var headerHeight = document.getElementById("header").offsetHeight;
	var navHeight = document.getElementById("mainNav").offsetHeight;
	var stickHeight = headerHeight - navHeight;
	//console.log("header height is " + headerHeight);
	//console.log("nav height is " + navHeight);
	var scroll = body.scrollTop; //chrome
	var scroll2 = html.scrollTop; //firefox
	//console.log("scrollamount is " + scroll + " or " + scroll2);
	if ( scroll >= stickHeight || scroll2 >= stickHeight ) {
		//console.log("stick the nav");
		$("#mainNav").addClass("fixed");
		$("#secondaryNav").removeClass("fixed");
		$("body.secondary #mainNav").css('top','0');
	} else {
		$("#mainNav").removeClass("fixed");
	}
}
function secondaryNav() {
	var body = document.body;
	var html = document.documentElement;
	var secondarynav = document.getElementById('secondaryNav');
	var headerHeight = document.getElementById('top-section').offsetHeight;
	var secondaryNavHeight = secondarynav.offsetHeight;
	var navHeight = secondarynav.offsetHeight;
	var stickHeight = headerHeight - navHeight;
	var moveHeight = headerHeight - (navHeight + secondaryNavHeight - 1);
	var scroll = body.scrollTop; //chrome
	var scroll2 = html.scrollTop; //firefox
	//console.log("move height is " + moveHeight);
	//console.log("HEADER HEIGHT IS " + headerHeight + " NAV HEIGHT IS " + navHeight + " STICK HEIGHT IS " + stickHeight);
	//console.log("scrollamount is " + scroll + " or " + scroll2);
	if ( scroll >= moveHeight || scroll2 >= moveHeight ) {
		//console.log("MOVE TOP NAV UP");
		var rect = secondarynav.getBoundingClientRect();
		//console.log(rect.top, rect.right, rect.bottom, rect.left);
		topPosition = rect.top - ( navHeight - 2 );
		//console.log("topPosition is " + topPosition);
		if (width >= 1320 && height >= minH) {
			$("#mainNav").css('top',topPosition);
		}
		if ( scroll >= stickHeight || scroll2 >= stickHeight ) {
			//console.log("stick the SECONDARY nav");
			$(secondarynav).addClass("fixed");
			$("#mainNav").css('top','0');
		} else {
			$(secondarynav).removeClass("fixed");
		}
	}
}
function scroll() {
	fixedNav();
}
function secondaryScroll() {
	fixedNav();
	secondaryNav();
	//console.log("YOU ARE SCROLLING");
}
function resize() {
	//console.log("Window resized");
	parallax();
	fixedNav();
}
window.onresize = resize;
window.onscroll = scroll;;
window.onload = start;
//$("#testimonialVideoPlay").on('click',function() {
	//$("#vimeo-iframe").css('display','block');
	//$("#modalVideoArea").hide();
//});
