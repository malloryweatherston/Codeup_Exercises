<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//$query = 'Tina' || 'Bob';

//$result = array_search($query, $names); 

//var_dump($result);

function array_has_value($needle, $haystack) {
 $result = array_search($needle, $haystack); 
 if ($result === false ) {
	return false;
	} else {
	return true; 
	}

return array_search($needle, $haystack); 
}



var_dump(array_has_value('Bob' , $names));


function compare_arrays($array1, $array2) {

	$count =  0; 
	foreach($array1 as $value1) {
		if (array_has_value($value1, $array2)){
			$count++;
		}
	}

	return $count;
}

var_dump(compare_arrays($names, $compare)); 