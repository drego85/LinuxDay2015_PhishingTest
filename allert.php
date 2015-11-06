<?php
$browser = $_SERVER['HTTP_USER_AGENT']; 

	if($_GET["email"] )
	{
		$file = 'people.txt';
		// Open the file to get existing content
		$current = file_get_contents($file);
		// Append a new person to the file
		$current .= $_GET['email'] . " - " . date("Y-m-d H:i:s") . " - " . $browser . "\n";
		// Write the contents back to the file
		file_put_contents($file, $current);
	}else{
		header("location: index.html");
	}

  
?>

<!DOCTYPE html>
<html>
<head>
<title>WiFi Linux Day 2015</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=0.50; maximum-scale=0.50; minimum-scale=0.50; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
</head>
<body>

<p align="center">
<img src="wifi_linux_day.png" alt="WiFi Linux Day 2015">
</p>
</body>
</html> 