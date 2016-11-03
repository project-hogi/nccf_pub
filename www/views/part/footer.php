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

<!-- 레이어팝업시작 -->
<script language="Javascript" type="text/javascript">
	<!--
	function setCookie( name, value, expirehours ) {
		var todayDate = new Date();
		todayDate.setHours( todayDate.getHours() + expirehours );
		document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
	}
	function closeWin() {
		if(document.getElementById("pop_today").checked){
			setCookie( "ncookie", "done" , 24 );
		}
		document.getElementById('layer_pop').style.display = "none";
	}
	-->
</script>

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

<script language="Javascript" type="text/javascript">
	<!--
	cookiedata = document.cookie;
	// alert(cookiedata.indexOf("ncookie=done"));
	if (cookiedata.indexOf("ncookie=done") < 0){
		// alert("false");
		document.getElementById('layer_pop').style.display = "inline";
	}
	else {
		// alert("true");
		document.getElementById('layer_pop').style.display = "none";
	}
	-->
</script>