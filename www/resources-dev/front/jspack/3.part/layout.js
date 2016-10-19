"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("#header").eachReadyScope(function() {
			var $header = $(this);
			var $window = $(window);
			var headerHeight = $header.height();

			$window.on("resized", func);
			$window.on("scrolled", func);
			func();

			function func() {
				var scrollTop = $window.scrollTop();

				if (scrollTop >= headerHeight) {
					$header.addClass("weakly");
				} else {
					$header.removeClass("weakly");
				}
			}
		});

		$(".lnb").eachReadyScope(function() {
			var $lnb = $(this);
			var firstOn = false;
			var overOnDelayTime = 400;

			$lnb.on("mouseover", "li", function() {
				var $currentLi = $(this);
				var $ul = $currentLi.parent("ul");
				var $li = $ul.find(">li");

				if ($ul.parent(".lnb").size())
					$li = $ul.parent(".lnb").find(">ul>li");

				$li.removeClass("focus");
				$currentLi.addClass("focus");
				$li.removeClass("over-on");
				$currentLi.addClass("over-on");
				timeoutClear($ul);
				childrenOn($currentLi);
			});

			$lnb.on("mouseout", "li", function() {
				var $currentLi = $(this);
				var $ul = $currentLi.parent("ul");
				var $li = $ul.find(">li");

				$li.removeClass("focus");

				$ul.data("timeout", setTimeout(function() {
					var $liOn = $li.removeClass("over-on");
					$li.filter(".active").addClass("over-on");
					childrenOn($liOn);
				}, overOnDelayTime));
			});

			$lnb.on("click", "a", function(event) {
				$lnb.find("li").removeClass("active");
				$(this).parents("li").addClass("active");
			});

			depthCheck();

			function depthCheck() {
				var depth = 1;

				$lnb.find(">ul>li.over-on").each(function() {
					$(this).find(">ul>li.over-on").each(function() {
						depth++;

						if (parseInt($(this).find(">ul").css("left")) != -10000) {
							$(this).find(">ul>li.over-on").each(function() {
								depth++;
							});
						}
					});
				});

				$("body").removeClass("lnb-show-depth-1 lnb-show-depth-2 lnb-show-depth-3").addClass("lnb-show-depth-" + depth);
			}
			function childrenOn($li) {
				if (!$li || !$li.size()) {
					depthCheck();

					return;
				}

				var $childrenLi = $li.find(">ul>li");

				if (!$childrenLi.size()) {
					depthCheck();

					return;
				}

				if (!$childrenLi.filter(".over-on").size()) {
					var $firstChildLi = $childrenLi.first().addClass("over-on");
				}

				childrenOn($firstChildLi);
			}
			function timeoutClear($ul) {
				if ($ul.size()) {
					clearTimeout($ul.data("timeout"));

					timeoutClear($ul.parent("li").parent("ul"));
				}
			}

			$lnb.find("li.active").addClass("over-on");

			if (firstOn && !$lnb.find(">ul>li.active").size()) {
				$lnb.find(">ul>li:first-child").addClass("active");
				$("body").removeClass("lnb-show-depth-1 lnb-show-depth-2 lnb-show-depth-3").addClass("lnb-show-depth-2");
			}
		});

		$(".sitemap").eachReadyScope(function() {
			var $sitemap = $(this);
			var $sitemapCont = $sitemap.find(".cont");
			var timeoutId = null;

			$("a.open-sitemap").on("click", function(event) {
				event.preventDefault();

				open();
			});
			$sitemap.find(">.bg").on("click", function() {
				close();
			});
			$sitemap.find("a.close-sitemap").on("click", function(event) {
				event.preventDefault();

				close();
			});
			$sitemap.on("click", "ul a", function(event) {
				$sitemap.find("li").removeClass("active");
				$(this).parents("li").addClass("active");
				close();
			});

			$(window).on("resized.sitemap", function() {
				$sitemapCont.height($sitemap.height());
			}).triggerHandler("resized.sitemap");

			function open() {
				if ($sitemap.hasClass("active"))
					return;

				clearTimeout(timeoutId);
				$.scrollLock();
				$sitemap.show();

				timeoutId = setTimeout(function() {
					$sitemap.addClass("active");
				}, 10);
			}
			function close() {
				if (!$sitemap.hasClass("active"))
					return;

				clearTimeout(timeoutId);
				$sitemap.removeClass("active");

				timeoutId = setTimeout(function() {
					$sitemap.hide();
					$.scrollLock("unlock");
				}, 300);
			}

			$(document).on("esc", function() {
				close();
			});
		});

		$(".clock, .page-clock").eachReadyScope(function() {
			var $h = $(this).find(".h");
			var $m = $(this).find(".m");
			var h = 0;
			var m = 0;

			if (!$h.size() || !$m.size())
				return;

			setInterval(run, 5000);
			run();

			function run() {
				var date = new Date();

				h = (date.getHours() % 12) * 5;
				h += Math.floor((date.getMinutes() % 60) / 12);
				m = date.getMinutes();

				setHour();
				setMinute();
			}

			function setHour() {
				for (var i = 0; i < 12; i++)
					$h.removeClass("h" + i);

				$h.addClass("h" + h);
			}

			function setMinute() {
				for (var i = 0; i < 60; i++)
					$m.removeClass("m" + i);

				$m.addClass("m" + m);
			}

		});
	});

})(jQuery);