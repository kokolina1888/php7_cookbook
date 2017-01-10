<?php 
include('developing_functions_library_type_hints.php');

// try{
// 	$callable = function(){
// 		return 'Callback return';};
// 		echo someTypeHint([1, 2, 3], new DateTime(), $callable);
// 		echo someTypeHint('A', 'B', 'C');
// 	}	catch(TypeError $e){
// 		echo $e->getmessage();
// 		echo PHP_EOL;
// 	}

	// try {
	// 	echo someScalarHint(true, 11, 22.22, 'string');
	// 	echo someScalarHint('a', 'b', 'c', 'd');
	// } catch(TypeError $e){
	// 	echo $e->getmessage();
	// }
// try{
// 	$b = someBoolHint(true);
// 	$i = someBoolHint(11);
// 	$f = someBoolHint(22.22);
// 	$s = someBoolHint('X');
// 	var_dump($b, $i, $f, $s);
// 	$b = someBoolHint(false);
// 	$i = someBoolHint(0);
// 	$f = someBoolHint(0.0);
// 	$s = someBoolHint('');
// 	var_dump($b, $i, $f, $s);
// } catch(TypeError $e) {
// 	echo $e->getMessage();
// }

// try {
// 	$a = someBoolHint([1, 2, 3]);
// 	var_dump($a);
// } catch(TypeError $e){
// 	echo $e->getMessage();
// }

try{
	$o = someBoolHint(new StdClass());
	var_dump($o);
} catch(TypeError $e) {
	echo $e->getMessage();
}