<?php

$contents = file_get_contents('http://www.woot.com/DefaultMicrosummary.ashx');

if (preg_match('~^\d%~', $contents)) {
	$wootoff = true;
}
else { 
	$wootoff = false;
}
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($wootoff === true ? "It's a Mother 'effing Woot off!" : "No Woot off today") ?></title>
	<style type="text/css">
		body { text-align: center; }
		h1 { font-size: 300%; }
	</style>
</head>
<body>
	<h1><?php echo $wootoff === true ? "Woot off!!" : "nope"; ?></h1>
</body>
</html>
