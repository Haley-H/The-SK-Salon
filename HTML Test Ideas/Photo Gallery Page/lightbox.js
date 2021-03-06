/*lightbox overlay when user clicks on image*/
$(document).ready(function() {
	$("img").click(function() {
		$src = $(this).attr("src");
		if (!$("#lightbox").length > 0) {
			$("body").append("<div id='lightbox'><img src=''></div>");
			$("#lightbox").show();
			$("#lightbox img").attr("src", $src);
		} 
		else {
			$("#lightbox").show();
			$("#lightbox img").attr("src", $src);
		}
	});
	
	/*closes lightbox image - can click anywhere */
	$("body").on("click", "#lightbox", function() {
		$("#lightbox").hide();
	});
});
