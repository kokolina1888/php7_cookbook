<?php
// developing functions -- namespace

include ('developing_function_namespace_alph.php');
include ('developing_function_namespace_beta.php');

// executes someTypeHint()
try {
    echo Alpha\someFunction();
    echo Beta\someFunction();
} catch (TypeError $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}