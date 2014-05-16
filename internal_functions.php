<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function check($x) {
if (empty($x)) {
	echo "$variable is empty\n";
	} else { 
		echo "$variable is not empty\n"; 
	} if (isset($x)) {
		echo "$variable is not set\n";
	} else {
		echo "$variable is not set\n";
	}
}

echo check($something);
// if (isset(check($nothing)))
// 	echo 
// echo check($nothing);

// TEST: If var $nothing is set, display '$nothing is SET'


// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results
$serial = serialize($array);
echo "\$array serialized: $serial\n";
// Unserialize the array $array, and output the results
$unserialized_array = unserialize($serial);
echo "unserialized array\n";
var_dump($unserialized_array);