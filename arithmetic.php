<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	echo $a + $b . PHP_EOL;
	} else { 
		echo "ERROR: Both $a and $b should be numbers\n";
	}
}

add(5,4);

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) { 
    	echo $a - $b . PHP_EOL;
    } else {
    	echo "ERROR: Both $a and $b should be numbers\n";
    }
}


subtract(7,4);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
	} else { 
		echo "ERROR: Both $a and $b should be numbers\n";
	}
}

multiply(5,4);

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
    	echo $a / $b . PHP_EOL;
	} else {
		echo "ERROR: Both $a and $b should be numbers and you cannot divide by zero!\n";
	}
}

divide(10,2);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";
	} else {
		echo "ERROR: Both $a and $b should be numbers\n";
	}
}
modulus(2,2);