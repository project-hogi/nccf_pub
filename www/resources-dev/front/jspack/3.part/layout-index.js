"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("body.layout-index").each(function() {
			$(".lnb").eachReadyScope(function() {
				$(this).on("click", "a", function(event) {
					event.preventDefault();
					
					alert("준비 중 입니다.");
				});
			});
		});
	});

})(jQuery);