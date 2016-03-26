var matrixItems;
var matrixLength;
var itemHeight = 113;
//var minH = 601;
var minH = 788;
var theMatrix = document.getElementById('theMatrix');
function storeMatrix() {
	matrixItems = document.getElementsByClassName('item');
	matrixLength = matrixItems.length;
	//alert("there is " + matrixLength + " matrix items");
	for (i=0; i < matrixLength; i++) {
		//console.log("MATRIX");
		matrixItems[i].setAttribute('data-item',i);
		if (i <= 5) {
			$(matrixItems[i]).addClass("level1");
		} else if ( i > 5 && i < 12 ) {
			$(matrixItems[i]).addClass("level2");
		} else if ( i >= 12 ) {
			$(matrixItems[i]).addClass("level3");
		} else {
			console.log("no more i");
		}
	}
}
function setMatrix() {
}
function after(ms, fn) {
	setTimeout(fn, ms);
}
$(".matrix .item-control").on('click',function() {
	console.log("You've clicked an item");
	var width = window.innerWidth
		|| document.documentElement.clientWidth
		|| document.body.clientWidth;
	var height = window.innerHeight
		|| document.documentElement.clientHeight
		|| document.body.clientHeight;
	uid=$(this).parent().data('item');
	$(".item").removeClass("brother");
	if ( width >= 544 && width < 768 ) {
		if (uid <= 1) {
			for (i=0; i <= 1; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 1 && uid < 4) {
			for (i=2; i < 4; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 3 && uid < 6) {
			for (i=4; i < 5; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 5 && uid < 8) {
			for (i=6; i < 7; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 7 && uid < 10) {
			for (i=8; i < 9; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 9 && uid < 12) {
			for (i=10; i < 11; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 11 && uid < 14) {
			for (i=12; i < 13; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 13 && uid < 16) {
			for (i=14; i < 15; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 15 && uid < 18) {
			for (i=16; i < 17; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 17 && uid < 20) {
			for (i=18; i < 19; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else {
			console.log("out of range");
		}
	} else if ( width >= 768 && width < 1320 ) {
		if (uid < 3) {
			for (i=0; i < 3; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 2 && uid < 6) {
			for (i=3; i <= 5; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid >= 6 && uid < 9) {
			for (i=6; i < 9; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid >= 9 && uid < 12) {
			for (i=9; i < 12; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid >= 12 && uid < 15) {
			for (i=12; i < 15; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid >= 15 && uid < 18) {
			for (i=15; i < 18; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else {
			console.log("out of scope");
		}
	} else if ( width >= 1320 ) {
		if (uid <= 5) {
			for (i=0; i <= 5; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid > 5 && uid < 12) {
			for (i=6; i <= 11; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		} else if (uid >= 12) {
			for (i=12; i <= 17; i++) {
				$(matrixItems[i]).addClass("brother");
			}
		}
	} else {
		console.log("sizing not applicable");
	}
	console.log("you clicked number " + uid);
	$(".matrix .item").removeClass("active");
	var thisItem = $(this).parent();
	after(15, function() {
		$(thisItem).toggleClass("active");
		console.log("add active");
	});
	after(500, function() {
		if (width <= 1320) {
			//var matrixArea = theMatrix.getBoundingClientRect();
			//console.log("THE UID IS " + uid);
			//var thisArea = document.getElementsByClassName('item')[uid].getBoundingClientRect();
			//var fromTop = matrixArea.top;
			//var topPos = fromTop * 1;
			//console.log("fromtop is " + fromTop);
			//console.log("position is " + thisArea.top);
			//$(this).find('[class*="item-body"]').css('top',fromTop);
			//$(".item-body", this).addClass("ITISALIVE");
			var theBody = $("body").position().top;
			var theContainer = $("#theMatrix").offset().top;
			var theItem = thisItem.position().top;
			var topPos = theItem + itemHeight;
			console.log("container is at " + theContainer);
			console.log("item is at " + theItem);
			console.log("body is at " + theBody);
			thisItem.find('.item-body').css('top',topPos);
		}
	});
	after(500, function() {
		var width = window.innerWidth
			|| document.documentElement.clientWidth
			|| document.body.clientWidth;
		var height = window.innerHeight
			|| document.documentElement.clientHeight
			|| document.body.clientHeight;
		if (width >= 1320 && height >= minH) {
			//var navHeight = document.getElementById("mainNav").offsetHeight;
			//$('html,body').animate({scrollTop: ($(thisItem).offset().top - navHeight)}, 250);
			$('html,body').animate({scrollTop: $(".matrix").offset().top}, 250);
		} else {
			$('html,body').animate({scrollTop: $(thisItem).offset().top}, 250);
		}
	});
});

$(".item-control").on('click',function() {
	$(".item-control").removeClass("active");
	$(this).addClass("active");
});
var width = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;
$(function() {
	if ( width >= 992 ) {
			$(".viewport").niceScroll({
			zindex: "1",
			background: "rgba(0,0,0,0.2)",
			cursorcolor: "#08162C",
			cursorborder: "1px solid rgba(255,255,255,0.0)",
			cursorwidth: "5px",
			cursorborderradius: "10px",
			cursoropacitymin: 0,
			cursoropacity: .8,
			scrollspeed: 60,
			mousescrollstep: 60,
			hwacceleration: true,
			bouncescroll: true
		});
		//$(".scroller").niceScroll({
			//zindex: "500",
			//background: "rgba(0,0,0,0.2)",
			//cursorcolor: "#08162C",
			//cursorborder: "1px solid rgba(255,255,255,0.0)",
			//cursorwidth: "5px",
			//cursorborderradius: "10px",
			//cursoropacitymin: 0,
			//cursoropacity: .8,
			//scrollspeed: 60,
			//mousescrollstep: 60,
			//hwacceleration: true,
			//bouncescroll: true
		//});
	}
});
