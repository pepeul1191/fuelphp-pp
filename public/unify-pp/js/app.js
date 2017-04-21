$( ".dropdown" ).click(function(e) {
	//console.log($(e.currentTarget).children().eq(0).trigger( "click" ));
	var url = $(e.currentTarget).children().eq(0).attr("href");
	window.location.href = url;
});