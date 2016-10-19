<?php
function echoJsInPath($path) {
	$realPath = $_SERVER ['DOCUMENT_ROOT'] . $path;
	
	if (! is_dir ( $realPath )) {
		return;
	}
	
	$h = opendir ( $realPath );
	$files = [ ];
	
	while ( false !== ($file = readdir ( $h )) ) {
		if ($file == '.' || $file == '..') {
			continue;
		}
		
		if (is_dir ( $realPath . $file )) {
			echoJsInPath ( $path . $file . '/' );
			
			continue;
		}
		
		if (strpos ( $file, '.js' ) === false)
			continue;
		
		$files [] = $file;
	}
	
	sort($files);
	
	foreach ( $files as $file )
		echo '<script src="' . $path . $file . '"></script>
';
}
function getBodyClass($pagePath, $classString) {
	$namePartList = explode ( "-", str_replace ( ".php", "", basename ( $pagePath ) ) );
	
	$pageClaseList = [ ];
	
	if (! $pagePath) {
		$pageClaseList [] = "{pageClasses}";
	} else {
		for($i = 0; $i < count ( $namePartList ); $i ++) {
			$arr = [ ];
			$arr [] = "page";
			
			for($j = 0; $j <= $i; $j ++) {
				$arr [] = $namePartList [$j];
			}
			
			$pageClaseList [] = implode ( "-", $arr );
		}
	}
	
	$pageClassList2 = explode ( " ", $classString );
	
	return implode ( " ", array_unique ( array_merge ( $pageClaseList, $pageClassList2 ) ) );
}
function getBodyClassByPath($pagePath) {
	$namePartList = explode ( "-", str_replace ( ".php", "", basename ( $pagePath ) ) );
	
	$pageClaseList = [ ];
	
	if (! $pagePath) {
		$pageClaseList [] = "{pageClasses}";
	} else {
		for($i = 0; $i < count ( $namePartList ); $i ++) {
			$arr = [ ];
			$arr [] = "page";
			
			for($j = 0; $j <= $i; $j ++) {
				$arr [] = $namePartList [$j];
			}
			
			$pageClaseList [] = implode ( "-", $arr );
		}
	}
	
	return implode ( " ", $pageClaseList );
}
function getDepthId($pagePath, $depth) {
	$namePartList = explode ( "-", str_replace ( ".php", "", basename ( $pagePath ) ) );
	
	return isset ( $namePartList [$depth] ) ? $namePartList [$depth] : null;
}
function getNavsToHtml($tab, $navs, $first = true) {
	$html = ($first ? null : $tab) . "<ul>\r\n";
	
	foreach ( $navs as $nav ) {
		$hasChildren = isset ( $nav ["children"] ) && count ( $nav ["children"] );
		
		$html .= $tab . "\t<li" . (isset ( $nav ["on"] ) && $nav ["on"] ? " class=\"on\"" : null) . ">" . ($hasChildren ? "\r\n" : null);
		$html .= ($hasChildren ? $tab . "\t\t" : null) . "<a href=\"" . $nav ["url"] . "\">" . $nav ["name"] . "</a>" . ($hasChildren ? "\r\n" : null);
		
		if ($hasChildren)
			$html .= getNavsToHtml ( $tab . "\t\t", $nav ["children"], false );
		
		$html .= ($hasChildren ? $tab . "\t" : null) . "</li>\r\n";
	}
	
	$html .= $tab . "</ul>\r\n";
	
	return $html;
}
function getNavsByDepth($pagePath, $depth = 1) {
	$sitemap = getSitemap ( $pagePath );
	
	if ($depth == 0)
		return $sitemap;
	
	$pathIds = getPathIds ( $pagePath, $depth );
	$pathIds = array_splice ( $pathIds, 0, count ( $pathIds ) - 1 );
	
	$nav = findNavById ( $pathIds );
	
	if ($nav == null)
		return null;
	
	if (! isset ( $nav ["children"] ) || ! count ( $nav ["children"] ))
		return null;
	
	return $nav ["children"];
}
function getNameByDepth($pagePath, $depth = 0) {
	$sitemap = getSitemap ( $pagePath );
	
	$pathIds = getPathIds ( $pagePath, $depth );
	$nav = findNavById ( $pathIds );
	
	if ($nav == null)
		return null;
	
	return $nav ["name"];
}
function getPathIds($pagePath, $depth = 0) {
	$pathIds = [ ];
	
	for($i = 0; $i <= $depth; $i ++) {
		$id = getDepthId ( $pagePath, $i );
		
		if ($id == null)
			return null;
		
		$pathIds [] = $id;
	}
	
	return $pathIds;
}
function getAllPathIds($pagePath) {
	$pathIds = [ ];
	$i = 0;
	
	while ( true ) {
		$id = getDepthId ( $pagePath, $i );
		
		if ($id == null)
			break;
		
		$pathIds [] = $id;
		$i ++;
	}
	
	return $pathIds;
}
function getPageName($pagePath) {
	$sitemap = getSitemap ( $pagePath );
	
	$pathIds = getAllPathIds ( $pagePath );
	$nav = findNavById ( $pathIds );
	
	if ($nav == null)
		return null;
	
	return $nav ["name"];
}
function findNavById($pathIds = [], $i = 0, $findedNavs = null) {
	$sitemap = getSitemap ();
	
	if ($findedNavs == null)
		$findedNavs = $sitemap;
	
	foreach ( $findedNavs as $findedNav ) {
		if ($findedNav ["id"] != $pathIds [$i])
			continue;
		
		if (count ( $pathIds ) - 1 > $i) {
			if (isset ( $findedNav ["children"] ) && count ( $findedNav ["children"] ))
				return findNavById ( $pathIds, $i + 1, $findedNav ["children"] );
			else
				return null;
		}
		
		return $findedNav;
	}
	
	return null;
}
function getSitemap($pagePath = null) {
	global $sitemap;
	
	$sitemap = getSitemapDeep2 ( $sitemap );
	
	if ($pagePath == null)
		return $sitemap;
	
	$pathIds = getAllPathIds ( $pagePath );
	$sitemap = getSitemapDeep ( $pathIds, $sitemap, 0 );
	
	return $sitemap;
}
function getSitemapDeep($pathIds, &$navs, $i = 0) {
	foreach ( $navs as &$nav ) {
		if ($nav ["id"] != $pathIds [$i])
			continue;
		
		$nav ["on"] = true;
		
		if (count ( $pathIds ) - 1 > $i) {
			if (isset ( $nav ["children"] ) && count ( $nav ["children"] ))
				$nav ["children"] = getSitemapDeep ( $pathIds, $nav ["children"], $i + 1 );
		}
	}
	
	return $navs;
}
function getSitemapDeep2(&$navs, $pathIds = null) {
	if ($pathIds == null)
		$pathIds = [ ];
	
	foreach ( $navs as &$nav ) {
		$pathIds2 = $pathIds;
		$pathIds2 [] = $nav ["id"];
		$nav ["url"] = implode ( "-", $pathIds2 ) . ".php";
		
		if (isset ( $nav ["children"] ) && count ( $nav ["children"] ))
			$nav ["children"] = getSitemapDeep2 ( $nav ["children"], $pathIds2 );
	}
	
	return $navs;
}