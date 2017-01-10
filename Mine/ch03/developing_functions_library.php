<?php 
declare(strict_types = 1);

function someName($parameter){
	$result 	= "INIT";

	$result 	.= ' and also ' . $parameter;
	return $result;
}

function someOtherName($requiredParam, $optionalParam = NULL){
	$result = 0;
	$result+= $requiredParam;
	$result+= $optonalParam ?? 0;

	return $result;
}

function someInfinite(...$params){
	return var_export($params, true);
}

function someDirScan($dir){
	static $list = array();
	$list = glob($dir . DIRECTORY_SEPARATOR . '*');

	foreach ($list as $item) {

		if(is_dir($item)){
			$list = array_merge($list, someDirScan($item));
		}
	}
	return $list;
}

function someTypeHint(Array $a, DateTime $t, Callable $c) {
	$message = '';
	$message .= 'Array Count: ' . count($a) . PHP_EOL;
	$message .= 'Date: ' . $t->format('Y-m-d') . PHP_EOL;
	$message .= 'Callable Return: ' . $c() . PHP_EOL;
	return $message;
}