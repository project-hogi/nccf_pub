<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-main.php"; ?>
<div class="visual">
	<div class="eq-0">
		<div class="container">
			<a href="#">자세히보기</a>
		</div>
	</div>
</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>