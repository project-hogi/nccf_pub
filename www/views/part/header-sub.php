<!-- Header Sub.html -->
<div class="visual visible-xs-block visible-sm-block">
	<h2><?php echo getNameByDepth($pagePath, 0); ?></h2>
</div>
<div class="snb visible-xs-block visible-sm-block">
	<strong><a href="#toggle-snb"><?php echo getNameByDepth($pagePath, 1); ?></a></strong>
	<?php echo getNavsToHtml("	", getNavsByDepth($pagePath)); ?>
</div>
<div class="breadcrumb visible-md-block visible-lg-block">
	<div class="container">
		<ul>
			<li><a href="#">홈</a></li>
			<li><a href="#">메뉴1</a></li>
			<li><a href="#">메뉴2</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div class="container">
		<h2 class="page-title visible-md-block visible-lg-block"><span><?php echo getPageName($pagePath); ?></span></h2>
		<!-- //Header Sub.html -->

		<!--// 3depth-->
		<?php if(getDepthId($pagePath, 0) == "gallery"){ ?>
			<?php if(getDepthId($pagePath, 1) == "chronicling"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/chronicling-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						1939년 설립자 백남 김연준 선생이 과학기술인력 양성을 위해 설립한 ‘동아공과학원’으로 부터 시작 되었습니다. 1948년 기술건국의 기치 아래 ‘한양공과대학’으로 재출발 하였으며, 1959년 각계각층의 지도자를 양성하기 위한 종합대학 ‘한양대학교’로 승격한 이후 발전을 거듭하여 오늘날 한국의 명문사학으로 자리 잡았습니다.
					</p>
					<ul class="sub-nav-bar list-4">
						<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-1.php"><span>한양의 건학정신</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-2.php"><span>사진으로 보는 역사</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-3.php"><span>한양의 역대총장</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "4"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-4.php"><span>한양 UI 변천</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "founder"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/founder-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						사랑의 실천이라는 한 마디로 요약할 수 있습니다. 교육, 음악, 인권운동, 언론 등 다양한 분야에서 그가 일군 성과들은 목표가 아닌 사랑을 실천하는 과정이었기 때문입니다. 이는 일제강점기, 해방과 6.25 전쟁 등 정치적, 경제적 대혼란기 속에서도 흔들림 없이 신념을 펼쳐나간  원동력이자, 지난 세기 대한민국의 발전을 이끈 저력입니다.
					</p>
					<ul class="sub-nav-bar list-3">
						<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="active"<?php } ?>><a href="gallery-founder-1.php"><span>김연준 박사의 삶</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="gallery-founder-2.php"><span>한양가족</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="active"<?php } ?>><a href="gallery-founder-3.php"><span>백남상</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "history"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/history-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						1939년 동아공과학원으로 첫 발을 내디딘 이래, 한양공과대학, 종합대학 한양대학교, 서울ㆍERICA 양 캠퍼스  체제의 한양대학교 등으로 눈부신 성장을 거듭해 왔습니다. 한양이 걸어온 길은 국가와 민족의 발전을 이끌어 온 역사였으며, 한양의 오늘과 내일은 대한민국을 넘어 세계를 이끌어 나갈 힘찬 발걸음이 될 것입니다.
					</p>
					<ul class="sub-nav-bar list-2">
						<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="active"<?php } ?>><a href="gallery-history-1.php"><span>한양이 걸어온 길</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="gallery-history-2.php"><span>한양인의 발자취</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "engine"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/engine-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						산업화 · 민주화의 대한민국 역사를 이끌어왔고 미래의 세계를 이끌어가고자 오늘도 꿈의 엔진을 켜고 힘찬 가속 페달을 밟고 있습니다. 도전과 성장의 힘찬 에너지가 느껴지는 곳, 24시간 불이 꺼지지 않는  꿈의 터전. 이곳은 한양대학교입니다.
					</p>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "heart"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/heart-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						국내대학 최초로 사회봉사단과 산학협력단을 설치하여 ‘사랑의 실천’과 ‘실용학풍’이라는 한양 정신의 두 축을 구체화하고 있습니다. 또한 ‘한양은 세계로, 세계는 한양으로’라는 기치 아래 세계 속의 한양으로 거듭나고 있습니다.
					</p>
					<ul class="sub-nav-bar list-4">
						<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="active"<?php } ?>><a href="gallery-heart-1.php"><span>사회봉사</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="gallery-heart-2.php"><span>국제교류</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="active"<?php } ?>><a href="gallery-heart-3.php"><span>실용학풍</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "4"){ ?> class="active"<?php } ?>><a href="gallery-heart-4.php"><span>연구성과</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "pride"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/pride-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						기술ㆍ문화창조의 꿈을 가지고 끊임없는 도전과 발전을 거듭해온 한양대학교. 이러한 한양의 진정한 힘은 바로 대한민국과 세계를 이끌어가는 한양인으로 부터 나옵니다. 한양에서 꿈을 키우고 그 꿈을 세상 곳곳에서 펼치고 있는 한양인들이 있기에 한양의 이름은 더욱 빛나고 있습니다.
					</p>
					<ul class="sub-nav-bar list-2">
						<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="active"<?php } ?>><a href="gallery-pride-1.php"><span>한양동문</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="gallery-pride-2.php"><span>한양의 석학</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "life"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/life-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						대학생활의 낭만과 열정을 즐기며 다양한 분야에서 자신만의 끼와 열정을 뽐내며 충만한 에너지를 발산하는 한양인들. 365일 열정과 패기로 가득 찬 한양에는 낭만이 흐르고 젊음이 무르익습니다.
					</p>
					<ul class="sub-nav-bar list-3">
						<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="active"<?php } ?>><a href="gallery-life-1.php"><span>한양8경</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="gallery-life-2.php"><span>한양대가 궁금한양</span></a></li>
						<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="active"<?php } ?>><a href="gallery-life-3.php"><span>캠퍼스 풍경</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 1) == "future"){ ?>
				<div class="depth3">
					<p class="title">
						<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/gallery/future-0.png" alt="ZONE 1 한양대학교는" class="img-bg-lefttop">
						지속적인 성장과 발전을 위해 현재에 만족하지 않고 항상 변화하고 있습니다. 지금 한양은 단순히 훌륭한 대학을 넘어 글로벌 대학과 어깨를 나란히 할 수 있는 위대한	대학으로 거듭나기 위해 미래를 열어나가고 있습니다. 이제 과거의 자부심은 미래를 여는 의지로, 높은 긍지는 세계를 움직일 새로운 힘으로 변화하고 있습니다.
					</p>
				</div>
			<?php } ?>
		<?php } ?>
		<!--// 4depth-->

		<?php if(getDepthId($pagePath, 0) == "gallery"){ ?>
			<?php if(getDepthId($pagePath, 1) == "chronicling"){ ?>
				<?php if(getDepthId($pagePath, 2) == "2"){ ?>
					<ul class="sub-nav-depth4 list-4">
						<li<?php if(getDepthId($pagePath, 3) == "1"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-2-1.php"><span>1939-1959</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-2-2.php"><span>1960-1979</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "3"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-2-3.php"><span>1980-1999</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "4"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-2-4.php"><span>2000-2015</span></a></li>
					</ul>
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 1) == "founder"){ ?>
				<?php if(getDepthId($pagePath, 2) == "1"){ ?>
					<ul class="sub-nav-depth4 list-4">
						<li<?php if(getDepthId($pagePath, 3) == "1"){ ?> class="active"<?php } ?>><a href="gallery-founder-1-1.php"><span>박사의 생애</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="gallery-founder-1-2.php"><span>교육</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "3"){ ?> class="active"<?php } ?>><a href="gallery-founder-1-3.php"><span>음악</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "4"){ ?> class="active"<?php } ?>><a href="gallery-founder-1-4.php"><span>인권과 언론</span></a></li>
					</ul>
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 1) == "history"){ ?>
				<?php if(getDepthId($pagePath, 2) == "2"){ ?>
					<ul class="sub-nav-depth4 list-5">
						<li<?php if(getDepthId($pagePath, 3) == "1"){ ?> class="active"<?php } ?>><a href="gallery-history-2-1.php"><span>입학ㆍ졸업</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="gallery-history-2-2.php"><span>동아리</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "3"){ ?> class="active"<?php } ?>><a href="gallery-history-2-3.php"><span>축제</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "4"){ ?> class="active"<?php } ?>><a href="gallery-history-2-4.php"><span>체육대회</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "5"){ ?> class="active"<?php } ?>><a href="gallery-history-2-4.php"><span>학생회</span></a></li>
					</ul>
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 1) == "life"){ ?>
				<?php if(getDepthId($pagePath, 2) == "1"){ ?>
					<ul class="sub-nav-depth4 list-2">
						<li<?php if(getDepthId($pagePath, 3) == "1"){ ?> class="active"<?php } ?>><a href="gallery-life-1-1.php"><span>서울캠퍼스</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="gallery-life-1-2.php"><span>ERICA 캠퍼스</span></a></li>
					</ul>
				<?php } else if(getDepthId($pagePath, 2) == "2"){ ?>
					<ul class="sub-nav-depth4 list-2">
						<li<?php if(getDepthId($pagePath, 3) == "1"){ ?> class="active"<?php } ?>><a href="gallery-life-2-1.php"><span>서울캠퍼스</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="gallery-life-2-2.php"><span>ERICA 캠퍼스</span></a></li>
					</ul>
				<?php } else if(getDepthId($pagePath, 2) == "3"){ ?>
					<ul class="sub-nav-depth4 list-2">
						<li<?php if(getDepthId($pagePath, 3) == "1"){ ?> class="active"<?php } ?>><a href="gallery-life-3-1.php"><span>서울캠퍼스</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="gallery-life-3-2.php"><span>ERICA 캠퍼스</span></a></li>
					</ul>
				<?php } ?>
			<?php } ?>
		<?php } ?>



