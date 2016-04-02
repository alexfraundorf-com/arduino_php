
</script>
<HTML><body onload="play()">
<script language="JavaScript" type="text/javascript">
function play() {
 embed = document.createElement("embed");
 embed.setAttribute("src", "welcome.wav");
 embed.setAttribute("hidden", true);
 embed.setAttribute("autostart", true);
 document.body.appendChild(embed);
 }
</body></HTML>