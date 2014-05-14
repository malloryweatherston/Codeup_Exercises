<?php

//$fruits = array(apple, banana, strawberry, blueberry, peach); 

//foreach($fruits as $fruit) {
//	echo "{$fruit}\n";
//}




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

