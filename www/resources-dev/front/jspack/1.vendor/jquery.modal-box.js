"use strict";

(function($, console) {

	if (!console.log) {
		console.log = function() {
		}
	}

	/*
	 * 모달윈도우 (전체 화면을 덮고 화면 중앙에 레이어를 띄움)
	 * 
	 * src : url, html element, text mode : ajax(default), iframe, object,
	 * alert, confirm width, height : auto (iframe은 사용불가), (숫자)
	 * 
	 * width를 직접 입력하는 경우 반응형웹에서 지원문제가 있습니다.
	 * 
	 * mode이 alert또는 confirm인 경우 themeClass가 자동으로 지정되며, confirm은 yes 콜백을 실행한다.
	 * 각종 버그 및 ajax는 로드후 iframe도 로드후 애니메이션 실행, 그리고 로딩 표현 추가 필요 alert 및 confirm
	 * theme는 필수로 정의해야함
	 */

	/* 생성자 */
	$.modalBox = function(options) {
		var $modal = $("<div class=\"modal-box\" tabindex=\"0\">");

		// Alert, Confirm는 같은이름의 테마를 사용함
		if (options.mode == "alert" || options.mode == "confirm")
			options.theme = options.mode;

		// 테마
		var theme = options.theme ? options.theme : $.modalBox.defaults.theme;

		if (theme) {
			// 테마 유효성 검사
			if (!$.modalBox.defaults.themeMap[theme]) {
				console.log("modal-box : " + options.theme + " 테마 정보가 없습니다.");
				return false;
			}
		}

		if (!$.modalBox.defaults)
			$.modalBox.defaults = {};

		// 세팅
		var settings = $.extend(true, {}, $.modalBox.defaults, theme ? $.modalBox.defaults.themeMap[options.theme ? options.theme : $.modalBox.defaults.theme] : {}, options);
		var isOpened = false;

		if (!settings.theme)
			settings.theme = "primary";

		// 유효성
		if (options.src == null) {
			console.log("modal-box : src가 존재하지 않습니다.");
			return;
		}

		// 모달윈도우가 열려 있을경우 닫음
		if ($("body>.modal-box").size() > 0) {
			isOpened = true;
		}

		// 계산
		var width = settings.width;
		var height = settings.height;
		var style = " style=\"" + (!width || width == "auto" ? "" : "width:" + width + "px;") + (!height || height == "auto" ? "" : "height:" + height + "px;") + "\"";

		// 모달윈도우 생성
		switch (settings.mode) {
		case "iframe":
			if (settings.src) {
				if (settings.src.indexOf("?") === -1) {
					settings.src += "?is-modal=true";
				} else {
					settings.src += "&amp;is-modal=true";
				}
			}

			create("<iframe src=\"" + settings.src + "\" frameborder=\"0\"" + style + "></iframe>");

			var $iframe = $("iframe", $modal);

			$iframe.on("load", function() {
				var $contents = $iframe.contents();

				if (settings.height == "auto") {
					$contents.find("html, body").css({
						"overflow" : "auto",
						"height" : "auto"
					});
				}

				open();

				if (settings.height == "auto") {
					$contents.on("init", function() {
						if ($iframe.height() < $contents.find("body").outerHeight()) {
							$iframe.height($contents.find("body").outerHeight());
						}

						if ($modal.height() < $iframe.parent().parent().outerHeight()) {
							$modal.height($iframe.parent().parent().outerHeight());
						}
					}).trigger("init");

					$contents.on("load", function() {
						$contents.trigger("init");
					});

					setTimeout(function() {
						$contents.trigger("init");
					}, 1000);

					setTimeout(function() {
						$contents.trigger("init");
					}, 2000);

					setTimeout(function() {
						$contents.trigger("init");
					}, 3000);
				}
			});

			break;
		case "ajax":
			$.ajax({
				url : settings.src,
				success : function(html) {
					create(html, true);
					open();
				},
				error : function() {
					error();
				}
			});

			break;
		case "object":
			if (!settings.src.size()) {
				error();

				break;
			}

			create(settings.src.html(), true);
			open();

			break;
		case "image":
			if (!settings.src) {
				error();

				break;
			}

			var alt = "";

			if (settings.object && settings.object.size() > 0) {
				if (settings.object.attr("alt")) {
					alt += "<p>" + settings.object.attr("alt") + "</p>";
				} else if (settings.object.find("img").attr("alt")) {
					alt += "<p>" + settings.object.find("img").attr("alt") + "</p>";
				}
			}

			create("<img src=\"" + settings.src + "\" alt=\"\" style=\"width: 100%;\" />" + alt, true);
			open();

			break;
		case "alert":
			settings.theme = settings.mode;

			var html = new Array();
			html.push("<p>" + settings.src + "</p>");
			html.push("<div><button class=\"confirm" + (settings.mainBtnClass ? " " + settings.mainBtnClass : "") + "\">확인</button></div>");

			create(html.join(""), true);
			open();

			break;
		case "confirm":
			settings.theme = settings.mode;

			var html = new Array();
			html.push("<p>" + settings.src + "</p>");
			html.push("<div><button class=\"yes" + (settings.mainBtnClass ? " " + settings.mainBtnClass : "") + "\">네</button> <button class=\"no" + (settings.subBtnClass ? " " + settings.subBtnClass : "") + "\">아니요</button></div>");

			create(html.join(""), true);
			open();

			break;
		default:
			console.log("modal-box : " + settings.mode + "는 존재하지 않는 mode입니다.");
			return false;
		}

		// 이벤트
		$modal.on("close", function() {
			close();
		});

		$modal.on("backgroundClose", function() {
			if (settings.useBackgroundCloseEvent) {
				close();
			}
		});

		$modal.on("justClose", close);

		$modal.on("click", ".yes", function() {
			if (settings.yes != null) {
				settings.yes();
			}

			$.modalBoxClose(true);
		});

		$modal.on("click", ".no, .confirm", function() {
			$.modalBoxClose();
		});

		// 객체생성
		function create(data, autoWrap) {
			if (autoWrap) {
				data = "<div" + style + ">" + data + "</div>";
			}

			if (settings.theme) {
				$modal.addClass("modal-box-" + settings.theme);
			}

			if (isOpened) {
				$modal.find(">div>div>div").html(data + "<a href=\"#close\"><span class=\"sr-only\">닫기</span></a>");
			} else {
				$.scrollLock();

				var backgroundCursorHTML = settings.useBackgroundCloseEvent ? "" : "cursor:default";

				var html = new Array();
				// html.push(ie7 ? "<div><span style="height:" +
				// $(document).height() + "px; " + backgroundCursorHTML +
				// ""></span><div><div>" : "<div><span style="" +
				// backgroundCursorHTML + ""></span><div><div>");
				html.push("<div><span style=\"" + backgroundCursorHTML + "\"></span><div><div>");
				html.push(data);
				html.push("<a href=\"#close\"><span class=\"sr-only\">닫기</span></a></div></div></div>");

				$modal.hide().html(html.join("")).appendTo("body");
			}
		}

		// 오픈
		function open() {
			$modal.show();
		}

		// 닫기
		function close() {
			$modal.removeAttr("class").addClass("modal-box").remove();
			$.scrollLock("unlock");

			if (settings.close != null) {
				settings.close();
			}
		}

		// 에러
		function error() {
			$.modalBox({
				src : "오류가 발생 하였습니다.",
				mode : "alert"
			});

			setTimeout($.modalBoxClose, 2000);
		}
	};

	/* 속성 및 기능 */
	$.extend($.modalBox, {
		defaults : {
			src : null,
			mode : "ajax",
			width : "auto",
			height : "auto",
			theme : null,
			themeMap : null,
			mainBtnClass : null,
			subBtnClass : null,
			yes : null,
			close : null,
			useBackgroundCloseEvent : true
		},
		setDefaults : function(options) {
			$.extend($.modalBox.defaults, options);
		}
	});

	$.modalBoxClose = function(justClose, eventByBackground) {
		$("body>.modal-box").triggerHandler(justClose ? "justClose" : (eventByBackground ? "backgroundClose" : "close"));
	};

	$.fn.modal = function(options) {
		return this.click(function() {
			var options2 = $.extend({}, options);

			if (!options2.src && $(this).attr("href"))
				options2.src = $(this).attr("href");

			$.modalBox(options2);

			return false;
		});
	};

	$(document).on("click", ".modal-box>div>span", function(event) {
		$.modalBoxClose(false, true);

		return false;
	});

	$(document).on("click", ".modal-box a[href$=\"#close\"]", function() {
		$.modalBoxClose();

		return false;
	});

	$(document).on("esc", function() {
		$.modalBoxClose();
	});

	$(document).on("click", "a.trigger-modal-box", function() {
		var object = $(this);
		var src = object.attr("href");
		var mode = object.attr("data-modal-box-mode");
		var width = object.attr("data-modal-box-width");
		var height = object.attr("data-modal-box-height");
		var theme = object.attr("data-modal-box-theme");
		var options = {};

		options.object = object;
		options.src = src;

		if (mode)
			options.mode = mode;

		if (width)
			options.width = width;

		if (height)
			options.height = height;

		if (theme)
			options.theme = theme;

		$.modalBox(options);

		return false;
	});

	$(document).on("click", ".trigger-modal-box:not(a)", function() {
		var object = $(this);
		var src = object.attr("data-modal-box-src");
		var mode = object.attr("data-modal-box-mode");
		var width = object.attr("data-modal-box-width");
		var height = object.attr("data-modal-box-height");
		var theme = object.attr("data-modal-box-theme");
		var options = {};

		options.object = object;
		options.src = src;

		if (mode)
			options.mode = mode;

		if (width)
			options.width = width;

		if (height)
			options.height = height;

		if (theme)
			options.theme = theme;

		$.modalBox(options);

		return false;
	});

})(jQuery, window.console);
