var minHeight = 0;
var testimonialsArray = [];
var testimonialsLength;
function testimonials() {
	console.log("testimonials loaded");
	var g = 1;
	$(".testimonial").each(function() {
		testimonialsArray.push($(this));
		uniqueID = 'testimony' + g;
		this.setAttribute('id',uniqueID);
		g++;
		if ( $(this).outerHeight() > minHeight ) {
			minHeight = $(this).outerHeight();
		}
	});
	$(".testimonials").css("min-height",minHeight);
	testimonialsLength = testimonialsArray.length;
	for (var i = 0; i < testimonialsLength; i++) {
		console.log("testimonial");
	}
}
function after(ms, fn) {
	setTimeout(fn, ms);
}
var i;
var slideLife = 8000;
var slideLength = slideLife - 500;
var totalLength;
function myLoop() {
	if ( i == 1 ) {
		after(500, function() {
			testimonyID = 'testimony' + i;
			console.log("testimonyID is " + testimonyID);
			currentTestimony = document.getElementById(testimonyID);	
			currentTestimony.className = "testimonial active";
		});
	}
	setTimeout(function () {
		testimonyID = 'testimony' + i;
		console.log("testimonyID is " + testimonyID);
		currentTestimony = document.getElementById(testimonyID);	
		currentTestimony.className = "testimonial active";
		after(slideLength, function() {
			currentTestimony.className = "testimonial";
		});
		i++;
		if (i <= testimonialsLength) {
			myLoop();
		} else {
			after(slideLength, function() {
				console.log("show is over");
				run();
			});
		}
	}, slideLife)
}
function run() {
	i = 1;
	myLoop();
}
run();
