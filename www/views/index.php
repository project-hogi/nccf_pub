<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-main.php"; ?>
<div class="scene-container-wrap">
	<div class="scene-container scene-bg-container">
		<div class="scene-0 active"><div class="eq-0"></div><div class="eq-1"></div></div>
		<div class="scene-1"><div class="eq-0"></div><div class="eq-1"></div></div>
		<div class="scene-2"><div class="eq-0"></div><div class="eq-1"></div></div>
		<div class="scene-3"><div class="eq-0"></div><div class="eq-1"></div></div>
	</div>
	<div class="scene-container scene-content-container">
		<div class="scene-0 active">
			<table>
				<tr>
					<td>
						<img src="<?php echo $config["imageDir"] . "/part/layout-index/scene-content-eq-0.png"; ?>" alt="나에게 우리를 더하다. 축제소개, 자세히보기" usemap="#scene-content-0" />
						<map name="scene-content-0">
							<area shape="rect" coords="942,505,1182,565" href="/front/introduce">
						</map>
					</td>
				</tr>
			</table>
		</div>
		<div class="scene-1">
			<table>
				<tr>
					<td>
						<img src="<?php echo $config["imageDir"] . "/part/layout-index/scene-content-eq-1.png"; ?>" alt="프로그램, 자세히보기" usemap="#scene-content-1" />
						<map name="scene-content-1">
							<area shape="rect" coords="942,505,1182,565" href="/front/program">
						</map>
					</td>
				</tr>
			</table>
		</div>
		<div class="scene-2">
			<table>
				<tr>
					<td>
						<img src="<?php echo $config["imageDir"] . "/part/layout-index/scene-content-eq-2.png"; ?>" alt="북서울꿈의숲, 관람안내, 자세히보기" usemap="#scene-content-2" />
						<map name="scene-content-2">
							<area shape="rect" coords="942,505,1182,565" href="/front/program">
						</map>
					</td>
				</tr>
			</table>
		</div>
		<div class="scene-3">
			<table>
				<tr>
					<td>
						<img src="<?php echo $config["imageDir"] . "/part/layout-index/scene-content-eq-3.png"; ?>" alt="생활문화진흥원, 자세히보기" usemap="#scene-content-3" />
						<map name="scene-content-3">
							<area shape="rect" coords="942,505,1182,565" href="http://www.nccf.or.kr/" target="_blank">
						</map>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<a href="#next-scene" class="next active"><span class="sr-only">다음</span></a>
</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>