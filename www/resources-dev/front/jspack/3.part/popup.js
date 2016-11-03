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
