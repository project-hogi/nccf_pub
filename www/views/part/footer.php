<!-- Footer.html -->
</div>
</div>
<div id="footer">
	<div class="container">
		<p class="contact">03127 서울시 종로구 율곡로 190, 여전도회관 411호<br>
			T. 02)2623-3100 &nbsp;&nbsp;&nbsp;&nbsp; F. 02)2038-3112</p>
	</div>
</div>
</div>
<!-- //Footer.html -->


<!--팝업-->
<div class="layer_popup" style="position:absolute; width:500px;left:50%; margin-left:-480px; top:90px; z-index:1;" id="layer_pop">
	<div class="popup-content">
		<img src="<?php echo $config["imageDir"]?>/part/popup/popup.jpg" />
	</div>
	<div class="popup-footer">
		<input type="checkbox" name="pop_today" id="pop_today" /><label for="pop_today">오늘 하루 이 창 열지 않음</label>
		<a href="javascript:closeWin();">닫기</a>
	</div>
</div>

<script type="text/javascript">
	cookiedata = document.cookie;
	if (cookiedata.indexOf("ncookie=done") < 0){
		document.getElementById('layer_pop').style.display = "inline";
	}
	else {
		document.getElementById('layer_pop').style.display = "none";
	}
</script>