"use strict";

(function($) {

	$(document).on('appinit', function() {
		$("body.layout-index").each(function() {
			$(".depth1-lnb").eachReadyScope(function() {
				var $lis = $(this).find("li");
				var liSize = $lis.size();
				var lastIndex = null;

				setInterval(function() {
					var index = parseInt(Math.random() * liSize);

					if (index == lastIndex) {
						if (index == liSize - 1) {
							lastIndex = index = 0;
						} else {
							lastIndex = index += 1;
						}
					} else {
						lastIndex = index;
					}

					$lis.removeClass("active");
					$lis.eq(index).addClass("active");
				}, 1800);
			});

			$(".for-desktop-and-largedesktop").eachReadyScope(function() {
				var $obj = $(this);
				var $control = $obj.find(".control");
				var $controlAs = $control.find("a");
				var $next = $obj.find(".next");
				var $sceneBgContainer = $obj.find(".scene-bg-container");
				var $sceneBgEq0 = $sceneBgContainer.find(".scene-0");
				var $sceneContentContainer = $obj.find(".scene-content-container");
				var $sceneContentEq0 = $sceneContentContainer.find(".scene-0");
				var $siteLogo = $(".site-logo");
				var activeSceneIndex = 0;
				var lastTriggingMousewheelDatetime = null;
				var lastTriggingMousewheelPosition = null;
				var sceneSize = $controlAs.size();
				var sceneHeight = $obj.height();

				$(window).on("resized", function() {
					sceneHeight = $obj.height();
					runAnimation();
				});

				$siteLogo.on("click", function(event) {
					if (!$obj.filter(":visible").size())
						return;

					event.preventDefault();

					run(0);
				});

				$control.on("click", "a", function(event) {
					if (!$obj.filter(":visible").size())
						return;

					event.preventDefault();

					var index = $controlAs.index(this);

					run(index);
				});

				$next.on("click", function(event) {
					event.preventDefault();

					if (activeSceneIndex < sceneSize - 1)
						run(activeSceneIndex + 1);
				});

				$(window).on("mousewheel DOMMouseScroll", function(event) {
					if (!$obj.filter(":visible").size())
						return;

					var position = null;

					if (event && event.originalEvent && event.originalEvent.deltaY)
						position = event.originalEvent.deltaY >= 0 ? 1 : -1;
					else if (event && event.originalEvent && event.originalEvent.wheelDelta)
						position = event.originalEvent.wheelDelta <= 0 ? 1 : -1;
					else
						return;

					if ((lastTriggingMousewheelPosition == null || lastTriggingMousewheelPosition != null && position == lastTriggingMousewheelPosition) && lastTriggingMousewheelDatetime != null && new Date().getTime() - lastTriggingMousewheelDatetime < 600)
						return;

					var index = activeSceneIndex;

					if (position === 1) {
						if (activeSceneIndex < sceneSize - 1)
							index = activeSceneIndex + 1;
					} else {
						if (activeSceneIndex > 0)
							index = activeSceneIndex - 1;
					}

					run(index);

					lastTriggingMousewheelDatetime = new Date().getTime();
					lastTriggingMousewheelPosition = position;
				});

				function run(index) {
					if (!$obj.filter(":visible").size())
						return;

					if (index === null || activeSceneIndex === index)
						return;

					activeSceneIndex = index;

					$controlAs.parent().removeClass("active");
					$controlAs.eq(activeSceneIndex).parent().addClass("active");

					if (activeSceneIndex >= sceneSize - 1)
						$next.removeClass("active");
					else
						$next.addClass("active");

					$sceneBgContainer.removeClass("active").eq(activeSceneIndex).addClass("active");
					$sceneContentContainer.removeClass("active").eq(activeSceneIndex).addClass("active");

					runAnimation();
				}

				function runAnimation() {
					if (!$obj.filter(":visible").size())
						return;

					var targetPosition = activeSceneIndex * sceneHeight * -1;
					var duration = 400;
					var top = parseInt($sceneBgEq0.css("margin-top"));

					duration += Math.round(Math.abs(targetPosition - top) / sceneHeight * 300);

					$sceneBgEq0.stop().animate({
						"margin-top" : targetPosition
					}, {
						duration : duration,
						easing : "easeInOutExpo"
					});

					$sceneContentEq0.stop().animate({
						"margin-top" : targetPosition
					}, {
						duration : Math.round(duration * 1.2),
						easing : "easeInOutExpo"
					});
				}

				$sceneContentContainer.find(".scene-0").each(function() {
					var $areas = $(this).find("area");
					var $layer = $(this).find(".layer");

					$(this).find(".clock-control").each(function() {
						var areasSize = $areas.size();
						var timeoutId = null;
						var autoPointerIntervalId = null;
						var activeIndex = null;

						$(this).on("click", "area", function(event) {
							if ($.support.pjax) {
								event.preventDefault();

								var href = $(this).attr("href");

								$.pjax({
									url : href,
									container : '#pjax-container'
								});
							}
						});
						$(this).on("active.clockControl", "area", function() {
							clearTimeout(timeoutId);

							var index = $areas.index(this);

							activeIndex = index;

							$layer.stop().animate({
								opacity : 0
							}, {
								duration : 0,
								complete : function() {
									for (var i = 0; i < areasSize; i++)
										$layer.removeClass("active-" + (i + 1) + "-of-" + areasSize);

									$layer.addClass("active-" + (index + 1) + "-of-" + areasSize);

									$layer.stop().animate({
										opacity : 1
									}, {
										duration : 600
									});
								}
							});
						}).on("mouseover", "area", function() {
							$(this).trigger("active.clockControl");
						});
						$(this).on("inactive.clockControl", "area", function() {
							clearTimeout(timeoutId);

							timeoutId = setTimeout(function() {
								$layer.stop().animate({
									opacity : 0
								}, {
									duration : 600,
									easing : "easeInOutExpo",
									complete : function() {
										for (var i = 0; i < areasSize; i++)
											$layer.removeClass("active-" + (i + 1) + "-of-" + areasSize);
									}
								});
							}, 100);
						}).on("mouseout", "area", function() {
							$(this).trigger("inactive.clockControl");
						});
						$(this).on("mouseenter.clockControl.autoPointer", function() {
							if (autoPointerIntervalId != null)
								clearInterval(autoPointerIntervalId);
						});
						$(this).on("mouseleave.clockControl.autoPointer", function() {
							autoPointerIntervalId = setInterval(function() {
								var index = null;

								if (activeIndex == null || activeIndex < 0 || activeIndex >= areasSize - 1)
									index = 0;
								else
									index = activeIndex + 1;

								$areas.eq(index).trigger("active.clockControl");
							}, 1600);
						}).triggerHandler("mouseleave.clockControl.autoPointer");
					});
				});
			});

		});
	});

})(jQuery);