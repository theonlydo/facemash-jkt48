$(document).ready(function() {
	$("body").keydown(function(e) {
		if (e.which == 37) {
			alert("left");
		} else if (e.which == 39) {
			alert("right");
		}
	});
});