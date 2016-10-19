"use strict";

(function($, console) {

	if (!console) {
		console = function() {
		}
	}

	var consolePrefixString = "[Scroll Lock] ";

	$.scrollLock = function(mode) {
		var settings = $.scrollLock.defaults;
		var $body = $('body');
		var $container = $(settings.container);
		if (!$container.hasClass('scroll-lock-wrap')) {
			$container.addClass('scroll-lock-wrap');
		}
		if (!$container.size()) {
			console.log(consolePrefixString + 'container가 존재하지 않습니다.');
			return;
		}
		if (mode != 'unlock') {
			var scrollTop = $(window).scrollTop();

			$container.css({
				'top' : -scrollTop
			});

			$body.addClass('scroll-lock');
		} else {
			if (!$body.hasClass('scroll-lock'))
				return;
			$body.removeClass('scroll-lock');
			var scrollTop = -parseInt($container.css('top'));
			$container.css({
				'top' : ''
			}).each(function() {
				$(window).scrollTop(scrollTop);
			});
		}
	};
	$.extend($.scrollLock, {
		defaults : {
			container : '#wrap'
		},
		setDefaults : function(options) {
			$.extend($.scrollLock.defaults, options);
		}
	});
})(jQuery, window.console);