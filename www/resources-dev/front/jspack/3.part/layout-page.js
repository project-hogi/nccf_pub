"use strict";

(function($) {

	$(document).on('appinit', function() {
		$("body.layout-page").each(function() {
			$(".snb").eachReadyScope(function() {
				var $snb = $(this);
				var $window = $(window);
				var lastOpenedPosition = null;
				var scrollAutoCloseOffsetPx = 200;

				$snb.find(">strong a").on("click", function(event) {
					event.preventDefault();

					if (!$snb.hasClass("active")) {
						$snb.addClass("active");
						lastOpenedPosition = $window.scrollTop();
					} else {
						$snb.removeClass("active");
						lastOpenedPosition = null;
					}
				});
				$window.on("scroll", function() {
					if (lastOpenedPosition == null)
						return;

					var offset = lastOpenedPosition - $window.scrollTop();

					if (offset > scrollAutoCloseOffsetPx || offset < -scrollAutoCloseOffsetPx) {
						$snb.removeClass("active");
						lastOpenedPosition = null;
					}
				});
			});

			$(".depth3 .sub-nav-bar").eachReadyScope(function() {
				var $depth3 = $(this);
				var $depth4 = $(".sub-nav-depth4");
				var $lis = $(this).find("li");

				if (!$lis.first().hasClass("active") || $lis.first().hasClass("active") && $depth4.size() && !$depth4.find("li").first().hasClass("active")) {
					$.smoothScroll($depth3, -12, 0);
				}
			});
		});
	});

})(jQuery);