"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("body.layout-page").each(function() {
			var $body = $("body");
			var $lnb = $(".lnb");
			var bodyClassList = $body.attr("class").split(/\s+/);
			var pageClassList = new Array();

			for ( var i in bodyClassList) {
				var className = bodyClassList[i];

				if (className.indexOf("page") !== 0)
					continue;

				pageClassList.push(className.replace("page-", "nav-"));
			}

			$lnb.find("li").removeClass("active");

			for ( var i in pageClassList) {
				$lnb.find("li." + pageClassList[i]).addClass("active");
			}
		});
	});

})(jQuery);