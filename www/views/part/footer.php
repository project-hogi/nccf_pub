<!-- Footer.html -->
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<p class="contact visible-xs-block visible-sm-block visible-md visible-lg">
				04763 <br>서울특별시 성동구 왕십리로 222 <br>한양대학교 역사관 <br>홈페이지 책임자 : 박물관장 안신원, <br>담당자 : 김유리</p>
			<p class="copyright">Copyrights (c) 2016 Hanyang University.<br>
				All rights reserved.</p>
			<div class="unb-and-sns">
				<ul class="unb visible-md-block visible-lg-block">
					<li><a href="http://www.hanyang.ac.kr/">Hanyang University</a></li>
					<li><a href="http://library.hanyang.ac.kr/">Paiknam Library</a></li>
					<li><a href="http://www.hanyang.ac.kr/web/www/university-history-museum">Hanyang Museum</a></li>
					<li><a href="/front/introduce/location">Location</a></li>
				</ul>
				<ul class="sns">
					<li class="facebook"><a href="#"><span class="sr-only">Facebook</span></a></li>
				</ul>
			</div>
			<div class="enable-desktop-mode visible-xs-block visible-sm-block">
				<a href="#">PC버전</a>
			</div>
		</div>
	</div>
</div>
<div class="sitemap">
	<div class="bg"></div>
	<div class="cont">
		<div>
			<h2>
				<strong>대학교 역사관<br>
				전체메뉴 보기</strong>
				<span class="hidden-xs">Hanyang University <em>History Museum</em></span>
			</h2>
			<div>
				<?php
				$html = getNavsToHtml("				", getSitemap($pagePath));
				$html = str_replace("역사관 소개", "소개", $html);
				$html = str_replace("대학기록실", "대학 기록실", $html);
				$html = str_replace("소식알림", "소식 알림", $html);
				
				echo $html;
				?>
			</div>
		</div>
	</div>
	<a href="#close-sitemap" class="close-sitemap"><span class="sr-only">사이트맵 닫기</span></a>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">
					<img src="<?php echo $config["resourcesDir"]; ?>/images/part/btn/close.png" alt="">
					<span class="sr-only">close</span>
				</button>
				<div class="modal-img-box">
					<img src="" alt="">
				</div>
				<div class="modal-text-box">
					<p></p>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- //Footer.html -->
