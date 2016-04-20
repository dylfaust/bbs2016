var matrixItems;
var matrixLength;
var itemHeight = 113;
//var minH = 601;
var minH = 788;
var theMatrix = document.getElementById('theMatrixStatic');
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



var width = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;
$(function() {
	if ( width >= 240 ) {
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
