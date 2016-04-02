<?php
echo date("G:i:s");
$hour = date("G");
$minutes = date("i");

/*if($hour == 22 && $minutes == 26)
{
require("php_serial.class.php");
$serial = new phpSerial;
$serial->deviceSet("/dev/ttyACM0");
$serial->confBaudRate(115200);
$serial->deviceOpen();
$serial->sendMessage("light"); 
$serial->deviceClose(); 
}
*/
?>