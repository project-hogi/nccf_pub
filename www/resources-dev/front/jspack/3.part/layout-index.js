"use strict";

(function($) {

	$(document).on("appinit", function() {
		$("body.layout-index").each(function() {
			$(".scene-content-container img[usemap]").eachReadyScope(function() {
				$(this).rwdImageMaps();
			});
			$(".scene-container-wrap").eachReadyScope(function() {
				var $obj = $(this);
				var $control = $(".lnb");
				var $controlAs = $control.find(">ul>li>a");
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

				$control.on("mouseover", ">ul>li>a", function(event) {
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
			});
		});
	});

})(jQuery);