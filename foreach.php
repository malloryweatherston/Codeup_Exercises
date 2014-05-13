<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $things2) {
    if (is_array($things2)) {
        echo "{$things2} is an array\n";
    } else if (is_string($things2)) {
        echo "{$things2} is a string\n";
    } else if (is_float($things2)) {
        echo "{$things2} is a float\n";
    } else if (is_null($things2)) {
        echo "{$things2} is a null\n";
    } else if (is_bool($things2)) {
        echo "{$things2} is a boolean\n";
    } else if (is_int($things2)) {
        echo "{$things2} is an integer\n";
    }
} 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $things2) { 
 	if (is_scalar($things2)); {
 		echo "{$things2} is scalar\n";
 	}
 }

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $things2) {
	echo "{$things2}\n";
}