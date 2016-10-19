"use strict";

(function($) {

	$.fn.eachReadyScope = function(func) {
		this.each(function() {
			var $this = $(this);

			if ($this.data('eachReadyScope'))
				return;

			$this.data('eachReadyScope', true);

			$this.each(func);
		});
	};

	$(document).on("ready", function() {
		if (typeof less != "undefined") {
			less.pageLoadFinished.then(function() {
				$(document).trigger("appinit").trigger("appinitOnce");
			});
		} else {
			$(document).trigger("appinit").trigger("appinitOnce");
		}
	});

	$(document).on("keydown", function(event) {
		if (event.keyCode == 27)
			$(this).triggerHandler("esc");
	});

	/**
	 * resize의 부하가 과도해 한번 랩핑 합니다. resize가 완료 되면 resized가 호출 됩니다.
	 */
	$(window).each(function() {
		var $window = $(this);
		var timeoutId = null;

		$window.on("resize", function() {
			if (timeoutId != null)
				clearTimeout(timeoutId);

			timeoutId = setTimeout(function() {
				$window.triggerHandler("resized");
			}, 200);
		});
	});

	/**
	 * scroll의 부하가 과도해 한번 랩핑 합니다. scroll이 완료 되면 scrolled가 호출 됩니다.
	 */
	$(window).each(function() {
		var $window = $(this);
		var timeoutId = null;

		$window.on("scroll", function() {
			if (timeoutId != null)
				clearTimeout(timeoutId);

			timeoutId = setTimeout(function() {
				$window.triggerHandler("scrolled");
			}, 200);
		});
	});

})(jQuery);