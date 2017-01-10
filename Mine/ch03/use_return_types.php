<?php 

include 'dev_return_value_data_typing.php';

$date = new DateTime();
$format = 'l, d M Y';
$now = returnsString($date, $format);

echo $now . PHP_EOL;
var_dump($now);

echo "\nconvertsToString()\n";
var_dump(convertsToString(2, 3, 4));



date_default_timezone_set('Europe/Sofia');
echo date('H:i');
echo "\nmakesDateTime()\n";
$d = makesDateTime(2015, 11, 21);
var_dump($d);

try{
	$e = wrongDateTime(2015, 11, 21);
	var_dump($e);
} catch (TypeError $e) {
	echo $e->getMessage();
}