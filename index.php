<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" > 
<title>Arduino Project 1: Serial LED Control</title> 
<script type="text/javascript" src="includes/swfobject.js"></script>
<script src="includes/jquery.js"></script>
<script>
$(document).ready(function()
{
$('div.light').html('<img src="images/off.png" width="50" height="50">')

setInterval(function() 
{
$('#timeval').load('includes/time.php');
}, 1000);	

$('.light').click(function() 
{
	$('.debug').load('handlers/light.php');
	setTimeout(function()
	{
	var mydata = $('div.debug').text();
	if (mydata == 1) //light is turned on
		{
		$.getScript("audio_handlers/sound_light.php");
		$('div.light').html('<img src="images/on.png" width="50" height="50">')
		}
	else if (mydata == 0) //light is turned off
		{
		$.getScript("audio_handlers/sound_light.php");
		$('div.light').html('<img src="images/off.png" width="50" height="50">')
		}
;}, 300);
});
}); 
</script>
</head>
<body>
<div></div>
<div id="timeval"></div>
<div id="sound_container"></div>
<h1>Turn lights On and Off</h1>
<div class="light" >Turn light on.</div>
<div class="debug" >DEBUG</div>
<p>Visit <a href="http://www.last-templar.blogspot.com" target="_blank">my blog</a> for more interesting Arduino Projects and just for fun</p>
</body> 
</html>