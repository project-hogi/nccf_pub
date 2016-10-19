"use strict";

(function($, console) {

	if (!console.log) {
		console.log = function() {
		}
	}

	/*
	 * 부드러운 스크롤
	 * 
	 * 받은 인자로 스크롤을 부드럽게 이동한다. 스크롤 위치, jQuery Selector, jQuery Object
	 */
	$.smoothScroll = function(param, point, duration) {
		var targetPoint = 0;
		var windowHeight = $(window).outerHeight();
		var bodyHeight = $(document).outerHeight();
		var $body = $("html, body");

		switch (typeof (param)) {
		case "number":
			targetPoint = param;
			break;
		case "string":
			if (!$(param).size()) {
				console.log('객체가 없습니다. "' + param + '"');

				break;
			}

			targetPoint = $(param).offset().top;
			break;
		case "object":
			if (!param.size()) {
				console.log("객체가 없습니다.");

				break;
			}

			targetPoint = param.offset().top;
			break;
		default:
			console.log("올바른 호출이 아닙니다. [typeof : " + typeof (param) + "]");
			return;
		}

		if (targetPoint < 0 || !targetPoint)
			targetPoint = 0;

		var shortageHeight = windowHeight - bodyHeight + targetPoint;

		if (shortageHeight > 0)
			targetPoint -= shortageHeight;

		if (point)
			targetPoint += point;

		if (duration === 0) {
			$body.scrollTop(targetPoint);
		} else {
			$body.stop().animate({
				scrollTop : targetPoint
			}, duration ? duration : 500, "easeInOutExpo");
		}
	};

})(jQuery, window.console);