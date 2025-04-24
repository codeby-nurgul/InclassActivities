$(document).ready(function() {
	// preload images
	$("#image_list a").each(function() {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");
	});
	
	$("#image_list a").click(function(evt) {
		evt.preventDefault();
	  
		const imageURL = $(this).attr("href");
		const caption = $(this).attr("title");
	  
		$("#image, #caption").fadeOut(1000, function() {
		  
		  $("#image").attr("src", imageURL);
		  $("#caption").text(caption);
		  // 1 second
		  $("#image, #caption").fadeIn(1000);
		});
	  });
	  
	// move focus to first thumbnail
	$("li:first-child a").focus();

	

}); // end ready