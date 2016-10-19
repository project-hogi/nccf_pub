"use strict";

(function($, console) {

	if (!console.log) {
		console.log = function() {
		}
	}

	$(document).on("appinit", function() {
		$(".board-notice").eachReadyScope(function() {
			var $boardNotice = $(this);
			var $boardNoticelist = $boardNotice.find(".board-notice-list");

			$boardNotice.on("click", "dt>a", function(event) {
				event.preventDefault();

				var $li = $(this).closest("li");

				$li.trigger($li.hasClass("active") ? "close" : "open");
			});

			$boardNotice.on("open", "li", function() {
				var $siblings = $(this).siblings("li");

				$siblings.trigger("close");

				$(this).addClass("active");
				$(this).find("dd").stop().slideDown(function() {
					$.smoothScroll($(this), -240);
				});
			});

			$boardNotice.on("close", "li", function() {
				$(this).removeClass("active");
				$(this).find("dd").stop().slideUp();
			});
		});
	});

})(jQuery, window.console);