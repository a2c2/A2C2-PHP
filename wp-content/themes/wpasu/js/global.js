$(document).ready(function() {
	$("#tab-nav").show();
	$(".tab-content").hide();
	$("ul#main-tab-nav li:first").addClass("active").show();
	$(".tab-content:first").show();

	$("ul#main-tab-nav li").click(function() {
		$("ul#main-tab-nav li").removeClass("active");
		$(this).addClass("active");
		$(".tab-content").hide();
		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn();
		return false;
	});
});



		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/loading.gif',
				generatePagination: true,
				play: 5000,
				pause: 2500,
				hoverPause: true,
				// Get the starting slide
				start: startSlide
			});
		});

