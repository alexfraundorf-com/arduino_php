 <?php 
require("php_serial.class.php"); 
$serial = new phpSerial;
$serial->deviceSet("/dev/ttyACM0");
$serial->confBaudRate(115200);
$serial->deviceOpen();
$serial->sendMessage("light"); 
$done = false;
$line = "";
	while (!$done) 
	{
	$read = $serial->readPort();
		for ($i = 0; $i < strlen($read); $i++) 
		{
			if ($read[$i] == "\n") 
			{
			$done = true;
			echo 1; //$line;
			$line = "";
			} 
			else 
			{
			$line .= $read[$i];
			}
		}
	}
$serial->deviceClose(); 
?>
