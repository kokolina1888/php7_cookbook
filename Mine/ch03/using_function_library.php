<?php 

include('developing_functions_library.php');

echo someName('TEST');
echo PHP_EOL;
echo someOtherName(1);
echo PHP_EOL;
echo someOtherName(2);
echo PHP_EOL;

echo someInfinite(1, 2, 3);
echo PHP_EOL;
echo someInfinite(22.22, 'A', ['a'=>1, 'b' => 2]);
echo PHP_EOL;

foreach (someDirScan(__DIR__ . DIRECTORY_SEPARATOR . '..') as $item) {
	echo $item . PHP_EOL;
}
