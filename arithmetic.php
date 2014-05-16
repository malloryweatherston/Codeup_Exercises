<?php

function check($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else { 
		echo "ERROR: Both $a and $b should be numbers\n";
		return false; 
	}
}

function divide_zero($a, $b) {
	if ($b === 0) {
		echo "ERROR: Cannot divide by Zero";
		return "false";
	
	} 
}

function add($a, $b) {
	if (check($a, $b)) {
		return $a + $b; 
	}
}

function subtract($a, $b) {
	if (check($a, $b)) {
		return $a - $b; 
	}
}

function multiply($a, $b) {
	if (check($a, $b)) {
		return $a * $b; 
	}
}

function divide($a, $b) {
	if (divide_zero($a, $b)) { 
	} elseif (check($a, $b)) {
		return $a * $b;
	}

}

function modulus($a, $b) {
	if (check($a, $b)) {
		return $a % $b; 
	} 
}

echo add(5, 1) . PHP_EOL;

echo subtract(8, 4) . PHP_EOL;

echo multiply(5,4) . PHP_EOL;

echo divide(10,0) . PHP_EOL;

echo modulus(2,2) . PHP_EOL;

