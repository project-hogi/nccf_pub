"use strict";

(function($, console) {

	if (!console.log) {
		console.log = function() {
		}
	}

	$(document).on("appinit", function() {
		var $pageGallery = $('.page-gallery');
		$pageGallery.each(function() {
			var $eventNone = $('.event-none');
			$eventNone.on('click', 'a', function(e) {
				e.preventDefault();
			});

		});
		// 모달-타입-1
		var $modalType1 = $('.modal-type-1');
		var $modalType1Content = $('#myModal-1');
		$modalType1.each(function() {
			var $modalLi = $modalType1.find('li');
			$modalLi.on('click', 'a', function(e) {
				var $this = $(this);
				var $thisSrc = $this.find('img').attr('src');
				var $thisData = $this.attr('data-original-img');
				if ($thisData) {
					var $imgLocation = $thisData;
				} else {
					var $imgLocation = $thisSrc;
				}
				var $thisAlt = $this.find('img').attr('alt');
				var $preGallery = $this.find('.pre-gallery');
				var $modalImgBox = $modalType1Content.find('.modal-img-box');
				var $modalImg = $modalImgBox.find('img');
				var $modalTextBox = $modalType1Content.find('.modal-text-box');
				var $modalP = $modalTextBox.find('p');
				$modalImg.attr('src', $imgLocation);
				$modalP.text($thisAlt);
				$modalTextBox.html($preGallery.html());
				$preGallery = "";
			});
		});

		// 리스트 슬라이스
		$('.list-slice').each(function() {
			var $listSlice = $(this);
			var $ul = $listSlice.find('>ul');
			var $lis = $ul.find('>li');
			var $lisLength = $lis.length;

			var visible = null;

			if (!visible || visible < 1) {
				var dataVisible = parseInt($listSlice.attr("data-visible"));

				visible = dataVisible ? dataVisible : 6;
			}

			$listSlice.find(' > ul > li:gt(' + (visible - 1) + ')').hide();

			var $paging = $listSlice.find('.pagination');
			var dataPerPage = Math.ceil($lisLength / visible);

			var i;
			for (i = 0; i < dataPerPage; i++) {
				$paging.append('<li><a href="#page' + i + '">' + i + '</a></li>');
				console.log(i);
			}
			$paging.find('li').eq(0).addClass("active");

			var idx = 0
			$paging.on('click', 'a', function(e) {
				e.preventDefault();
				var $this = $(this);
				idx = $this.parent('li').index();
				var start = idx * 6;
				var end = start + 6;

				$paging.find('li').removeClass("active");
				$this.parent().addClass("active");

				$lis.hide();
				$lis.slice(start, end).show();
			});

			var $pager = $listSlice.find('.pager');
			var $pagerLis = $pager.find('li');
			var $pagerPrev = $pager.find('.prev');
			var $pagerNext = $pager.find('.next');
			$pagerPrev.on('click', function(e) {
				e.preventDefault();
				if (idx <= 0) {
					return false;
				} else {
					idx = idx - 1;
					var start = idx * 6;
					var end = start + 6;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
				}
			})
			$pagerNext.on('click', function(e) {
				e.preventDefault();
				if (idx >= xxx - 1) {
					return false;
				} else {
					idx = idx + 1;
					var start = idx * 6;
					var end = start + 6;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
				}
			})

		});

		// 리스트 슬라이스
		var $select = $('.list-slice-6');
		$select.each(function() {
			var $ul = $select.find('>ul');
			var $lis = $ul.find('>li');
			var $lisLength = $lis.length;

			var visible = 6;
			$('.list-slice-6 > ul > li:gt(5)').hide();

			var $paging = $select.find('.pagination');
			var xxx = Math.ceil($lisLength / visible);

			var i;
			for (i = 0; i < xxx; i++) {
				var icount = i + 1;
				$paging.append('<li><a href="#none">' + icount + '</a></li>');
			}
			$paging.find('li').eq(0).addClass("active");

			var idx = 0
			$paging.on('click', 'a', function(e) {
				e.preventDefault();
				var $this = $(this)
				idx = $this.parent('li').index();
				var start = idx * visible;
				var end = start + visible;

				$paging.find('li').removeClass("active");
				$this.parent().addClass("active");

				$lis.hide();
				$lis.slice(start, end).show();
			});

			var $pager = $select.find('.pager');
			var $pagerLis = $pager.find('li');
			var $pagerPrev = $pager.find('.prev');
			var $pagerNext = $pager.find('.next');
			$pagerPrev.on('click', function(e) {
				e.preventDefault();
				if (idx <= 0) {
					return false;
				} else {
					idx = idx - 1;
					var start = idx * visible;
					var end = start + visible;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
					console.log(idx);
				}
			})
			$pagerNext.on('click', function(e) {
				e.preventDefault();
				if (idx >= xxx - 1) {
					return false;
				} else {
					idx = idx + 1;
					var start = idx * visible;
					var end = start + visible;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
				}
			})

		});

		// 리스트 슬라이스
		var $select = $('.list-slice-9');
		$select.each(function() {
			var $ul = $select.find('>ul');
			var $lis = $ul.find('>li');
			var $lisLength = $lis.length;

			var visible = 9;
			$('.list-slice-9 > ul > li:gt(8)').hide();

			var $paging = $select.find('.pagination');
			var xxx = Math.ceil($lisLength / visible);

			var i;
			for (i = 0; i < xxx; i++) {
				var icount = i + 1;
				$paging.append('<li><a href="#none">' + icount + '</a></li>');
			}
			$paging.find('li').eq(0).addClass("active");

			var idx = 0
			$paging.on('click', 'a', function(e) {
				e.preventDefault();
				var $this = $(this)
				idx = $this.parent('li').index();
				var start = idx * visible;
				var end = start + visible;

				$paging.find('li').removeClass("active");
				$this.parent().addClass("active");

				$lis.hide();
				$lis.slice(start, end).show();
			});

			var $pager = $select.find('.pager');
			var $pagerLis = $pager.find('li');
			var $pagerPrev = $pager.find('.prev');
			var $pagerNext = $pager.find('.next');
			$pagerPrev.on('click', function(e) {
				e.preventDefault();
				if (idx <= 0) {
					return false;
				} else {
					idx = idx - 1;
					var start = idx * visible;
					var end = start + visible;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
					console.log(idx);
				}
			})
			$pagerNext.on('click', function(e) {
				e.preventDefault();
				if (idx >= xxx - 1) {
					return false;
				} else {
					idx = idx + 1;
					var start = idx * visible;
					var end = start + visible;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
				}
			})

		});

		// 리스트 슬라이스
		var $select = $('.list-slice-15');
		$select.each(function() {
			var $ul = $select.find('>ul');
			var $lis = $ul.find('>li');
			var $lisLength = $lis.length;

			var visible = 15;
			$('.list-slice-15 > ul > li:gt(14)').hide();

			var $paging = $select.find('.pagination');
			var xxx = Math.ceil($lisLength / visible);

			var i;
			for (i = 0; i < xxx; i++) {
				var icount = i + 1;
				$paging.append('<li><a href="#none">' + icount + '</a></li>');
			}
			$paging.find('li').eq(0).addClass("active");

			var idx = 0
			$paging.on('click', 'a', function(e) {
				e.preventDefault();
				var $this = $(this)
				idx = $this.parent('li').index();
				var start = idx * visible;
				var end = start + visible;

				$paging.find('li').removeClass("active");
				$this.parent().addClass("active");

				$lis.hide();
				$lis.slice(start, end).show();
			});

			var $pager = $select.find('.pager');
			var $pagerLis = $pager.find('li');
			var $pagerPrev = $pager.find('.prev');
			var $pagerNext = $pager.find('.next');
			$pagerPrev.on('click', function(e) {
				e.preventDefault();
				if (idx <= 0) {
					return false;
				} else {
					idx = idx - 1;
					var start = idx * visible;
					var end = start + visible;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
					console.log(idx);
				}
			})
			$pagerNext.on('click', function(e) {
				e.preventDefault();
				if (idx >= xxx - 1) {
					return false;
				} else {
					idx = idx + 1;
					var start = idx * visible;
					var end = start + visible;

					$paging.find('li').removeClass("active");
					$paging.find('li').eq(idx).addClass("active");

					$lis.hide();
					$lis.slice(start, end).show();
				}
			})

		});

	});

})(jQuery, window.console);

var player = new Audio("");
function play(url) {
	if (player.paused || url != player.src) {
		if (player.canPlayType("audio/mp3")) {
			player.src = url;
		}
		player.play();
	} else {
		player.pause();
		player.currentTime = 0;
	}
}