<?php
function error ($a, $b) {
		echo "ERROR: Both $a and $b should be numbers\n";
	}

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;
	} else { 
		 error($a, $b); 
	} 
}

add(5,4);

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) { 
    	echo $a - $b . PHP_EOL;
    } else {
    	 error($a, $b); 
    }
}


subtract(7, 4);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
	} else { 
		error($a, $b);
	}
}

multiply(5,4);

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
    	echo $a / $b . PHP_EOL;
	} else {
		 error($a, $b); 
	}
}

divide(10,2);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";
	} else {
		error($a, $b);
	}
}
modulus(2,2);

