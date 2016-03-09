var matrixItems;
var matrixLength;
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
$(".matrix .item").on('click',function() {
	console.log("You've clicked an item");
	uid=$(this).data('item');
	$(".item").removeClass("brother");
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
	console.log("you clicked number " + uid);
	$(".matrix .item").removeClass("active");
	var thisItem = $(this);
	after(15, function() {
		$(thisItem).toggleClass("active");
		console.log("add active");
	});
	var width = window.innerWidth
		|| document.documentElement.clientWidth
		|| document.body.clientWidth;
	var height = window.innerHeight
		|| document.documentElement.clientHeight
		|| document.body.clientHeight;
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
			var topPos = theItem + 64;
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
		if (width >= 1320 && height >= 601) {
			//var navHeight = document.getElementById("mainNav").offsetHeight;
			//$('html,body').animate({scrollTop: ($(thisItem).offset().top - navHeight)}, 250);
			$('html,body').animate({scrollTop: $(".matrix").offset().top}, 250);
		} else {
			$('html,body').animate({scrollTop: $(thisItem).offset().top}, 250);
		}
	});
});
