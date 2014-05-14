<?php

$fruits = array(
	array('name' => apple, 'color' => green),
	array('name' => banana, 'color' => yellow),
	array('name' => strawberry, 'color' => red),
	array('name' => blueberry, 'color' => blue),
	array('name' => peach, 'color' => peach)
); 



foreach($fruits as $fruit) {
	foreach ($fruit as $key => $value) {
		echo "The $key is $value\n";
	}
}

