//$("#myModal button").on('click', function() {
	//$("#myModal iframe").removeAttr('src');
//});
$("#myModal").on('hidden.bs.modal', function() {
	$("#myModal iframe").removeAttr('src');
});
