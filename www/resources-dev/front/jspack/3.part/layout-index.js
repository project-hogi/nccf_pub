"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("body.layout-index").each(function() {
			$(".lnb").eachReadyScope(function() {
			});
		});
	});

})(jQuery);