<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-main.php"; ?>
<div class="for-phone-and-tablet visible-xs-block visible-sm-block">
	<div class="visual">
		<p class="txt"><span class="sr-only">한양이 걸어온 발자취와<br>
			함께 한양이 만들어 갈<br>
			미래를 소개합니다</span></p>
		<div class="clock-wrap">
			<div class="clock">
				<div class="clock-inner">
					<div class="clock-gears">
						<span class="clock-gear-1"></span>
						<span class="clock-gear-2"></span>
						<span class="clock-gear-3"></span>
						<span class="clock-gear-4"></span>
						<span class="clock-gear-5"></span>
						<span class="clock-gear-6"></span>
						<span class="clock-gear-7"></span>
						<span class="clock-gear-8"></span>
						<span class="clock-gear-9"></span>
						<span class="clock-gear-10"></span>
						<span class="clock-gear-11"></span>
						<span class="clock-gear-12"></span>
						<span class="clock-gear-13"></span>
						<span class="clock-gear-14"></span>
					</div>
					<div class="clock-frame"></div>
					<div class="h h0"></div>
					<div class="m m0"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="depth1-lnb">
		<ul>
			<li class="active">
				<a href="introduce-greetings.php">역사관 소개</a> 
			</li>
			<li>
				<a href="gallery-chronicling-1.php">전시실</a>
			</li>
			<li>
				<a href="scriptorium-job.php">대학기록실</a>
			</li>
			<li>
				<a href="community-notice.php">소식알림</a>
			</li>
		</ul>
	</div>
</div>
<div class="for-desktop-and-largedesktop visible-md-block visible-lg-block">
	<div class="control">
		<ul>
			<li class="active"><a href="#scene-0">00 <strong>Home</strong></a></li>
			<li><a href="#scene-1">01 <strong>역사관소개</strong></a></li>
			<li><a href="#scene-2">02 <strong>전시실</strong></a></li>
			<li><a href="#scene-3">03 <strong>대학기록실</strong></a></li>
			<li><a href="#scene-4">04 <strong>소식알림</strong></a></li>
		</ul>
	</div>
	<a href="#next-scene" class="next active"><span class="sr-only">다음 화면</span></a>
	<div class="scene-container scene-bg-container">
		<div class="scene-0 active"></div>
		<div class="scene-1"></div>
		<div class="scene-2"></div>
		<div class="scene-3"></div>
		<div class="scene-4"></div>
	</div>
	<div class="scene-bg-cover"></div>
	<div class="scene-container scene-content-container">
		<div class="scene-0 active">
			<div class="container">
				<div class="txt">
					<p class="sr-only">한양이 걸어온 발자취와 함께 한양이 만들어 갈 미래를 소개합니다</p>
					<p>대한민국을 넘어 세계를 움직이는 동력이 될<br>
						한양대학교의 역사관에 오신 것을 환영합니다.<br>
						대학기록물의 수집, 분류, 보존, 활용을 통해 한양대학교의<br> 
						역사를 체계적으로 정리하고. 수집한 기록물을 활용한 전시실을 <br>
						통하여 과거와 현재, 그리고 미래의 한양대학교를 보여드리는 <br>
						복합역사문화공간입니다.</p>
				</div>
			</div>
			<div class="clock-wrap">
				<div class="clock-bg"></div>
				<div class="layer"></div>
				<div class="clock">
					<div class="clock-inner">
						<div class="clock-gears">
							<span class="clock-gear-1"></span>
							<span class="clock-gear-2"></span>
							<span class="clock-gear-3"></span>
							<span class="clock-gear-4"></span>
							<span class="clock-gear-5"></span>
							<span class="clock-gear-6"></span>
							<span class="clock-gear-7"></span>
							<span class="clock-gear-8"></span>
							<span class="clock-gear-9"></span>
							<span class="clock-gear-10"></span>
							<span class="clock-gear-11"></span>
							<span class="clock-gear-12"></span>
							<span class="clock-gear-13"></span>
							<span class="clock-gear-14"></span>
						</div>
						<div class="clock-frame"></div>
						<div class="h h0"></div>
						<div class="m m0"></div>
					</div>
				</div>
				<div class="clock-control">
					<img src="<?php echo $config["imageDir"] . "/part/page-index-desktop/clock-bg-control.png"; ?>" alt="" usemap="#clock-control" />
					<map name="clock-control">
						<area shape="poly" coords="2500,2500,2500,0,5000,0" href="#">
						<area shape="poly" coords="2500,2500,5000,0,5000,2500" href="#">
						<area shape="poly" coords="2500,2500,5000,2500,5000,5000" href="#">
						<area shape="poly" coords="2500,2500,5000,5000,2500,5000" href="#">
						<area shape="poly" coords="2500,2500,2500,5000,0,5000" href="#">
						<area shape="poly" coords="2500,2500,0,5000,0,2500" href="#">
						<area shape="poly" coords="2500,2500,0,2500,0,0" href="#">
						<area shape="poly" coords="2500,2500,0,0,2500,0" href="#">
					</map>
				</div>
			</div>
		</div>
		<div class="scene-1">
			<div class="box-container">
				<div>
					<div class="title">
						<h2>역사관<strong>소개</strong></h2>
						About
					</div>
					<div class="content">
						<a href="#" class="eq-0 s2x2"><span><span>역사관</span></span></a>
						<a href="#" class="eq-1 s2x1"><span><span>인사말</span></span></a>
						<a href="#" class="eq-2 s1x1"><span><span>전시실소개</span></span></a>
						<a href="#" class="eq-3 s1x1"><span><span>관람안내</span></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="scene-2">
			<div class="box-container">
				<div>
					<div class="title">
						<h2><strong>전시실</strong></h2>
						Exhibition Space
					</div>
					<ol>
						<li class="eq-0"><a href="gallery-chronicling.php"><span><span>The Chronicling of Hanyang</span></span></a></li>
						<li class="eq-1"><a href="gallery-founder.php"><span><span>The Founder of Hanyang</span></span></a></li>
						<li class="eq-2"><a href="gallery-history.php"><span><span>The History of Hanyang</span></span></a></li>
						<li class="eq-3"><a href="gallery-engine.php"><span><span>The Engine of Hanyang</span></span></a></li>
						<li class="eq-4"><a href="gallery-heart.php"><span><span>The Heart of Hanyang</span></span></a></li>
						<li class="eq-5"><a href="gallery-pride.php"><span><span>The Pride of Hanyang</span></span></a></li>
						<li class="eq-6"><a href="gallery-life.php"><span><span>The Life at Hanyang</span></span></a></li>
						<li class="eq-7"><a href="gallery-future.php"><span><span>The Future of Hanyang</span></span></a></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="scene-3">
			<div class="box-container">
				<div>
					<div class="title">
						<h2>대학<strong>기록실</strong></h2>
						University Archives
					</div>
					<ul>
						<li class="eq-0"><a href="#"><span>주요<br> 업무</span></a></li>
						<li class="eq-1"><a href="#"><span>기록열람<br> 신청</span></a></li>
						<li class="eq-2"><a href="#"><span>기증<br> 안내</span></a></li>
					</ul>
					<p>대학기록실은 <br>
						한양대학교(Hanyang University) 의 역사 및 행정기록물을 수집하고 분류, 보존 및 활용하는 역할을 수행합니다.</p>
				</div>
			</div>
		</div>
		<div class="scene-4">
			<div class="box-container">
				<div>
					<div class="title">
						<h2>소식<strong>알림</strong></h2>
						Notice &amp; Story
					</div>
					<div class="left-content">
						<div class="content-header">
							<h3>공지사항</h3>
							<a href="#" class="more">more</a>
						</div>
						<ul>
							<li>
								<a href="#">
									<strong class="date">2016. 07월 <span>18<span class="sr-only">일</span></span></strong>
									<em class="subject">대학 아카이브 기능할 한양대학교, 역사관 개관</em>
									<span class="content">한양대에서는 설립자 백남 김연준 박사 탄생 101주년과 개교 76주년을 기념하여 한양대 역사관을 
										개관한다. 역사관은 1939년 백남 김연준 선생이 25세의 나이에 설립한 동아공과학원에서부터 글로벌 대학
										으로 발돋움하는 현재의 한양대에 이르기까지 대한민국의 민주화와 산업화를 이끈 한양...</span>
								</a>
							</li>
							<li>
								<a href="#">
									<strong class="date">2016. 07월 <span>22<span class="sr-only">일</span></span></strong>
									<em class="subject">한양대, 12일 개교 76주년 기념 '역사관' 개관 한양대, 12일 개교 76주년 기념 '역사관' 개관 한양대, 12일 개교 76주년 기념 '역사관' 개관</em>
									<span class="content">한양대학교에 따르면 역사관은 1939년 백남 김연준 선생이 설립한 동아공과학원에서 학교의<br> 
										현재에 이르기까지의 모습을 여러 자료를 통해 소개한다. 대표적인 전시 물품으로는 1948년 백남 김연준 선생<br>
										의 친필 설립취의서와 동아공과학원 시절의 측량기·앨범...</span>
								</a>
							</li>
							<li>
								<a href="#">
									<strong class="date">2016. 06월 <span>06<span class="sr-only">일</span></span></strong>
									<em class="subject">한양대 개교 77주년 기념, 77하이리옷 전시회</em>
									<span class="content">한양대학교 77주년을 기념하여 하이리옷 역사관 계단 앞에서 오늘 17시까지 전시회가 진행된다고<br>
										합니다. 77하이리옷'은 한양대 공식 사자 캐릭터인 하이리온 인형 77마리에 새 옷을 입혀 한양의 77년 <br>
										역사속에서 보여줬던 다양함과 새로움을 상징하는 것입니다.</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="right-content">
						<div class="content-header">
							<h3>행사사진</h3>
							<a href="#" class="more">more</a>
						</div>
						<ul>
							<li>
								<a href="#">
									<span class="image" style="background-image: url('<?php echo $config["imageDir"] . "/_temp/gallery.jpg"; ?>');"></span>
									<strong class="subject">한양대 개교 77주년 기념, 77하이리옷 전시회 </strong>
									<span class="date">2016-07-22</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="image" style="background-image: url('<?php echo $config["imageDir"] . "/_temp/gallery.jpg"; ?>');"></span>
									<strong class="subject">2한양대 개교 77주년 기념, 77하이리옷 전시회 </strong>
									<span class="date">2016-07-22</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="image" style="background-image: url('<?php echo $config["imageDir"] . "/_temp/gallery.jpg"; ?>');"></span>
									<strong class="subject">3한양대 개교 77주년 기념, 77하이리옷 전시회 </strong>
									<span class="date">2016-07-22</span>
								</a>
							</li>
						</ul>
						<a href="#" class="go"><span class="sr-only"><strong>한양스토리</strong> 자세히보기</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>