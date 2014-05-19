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

//$result2 = array_search($query2, $compare);

//var_dump($result2); 

$query = 'Tina' || 'Bob';

$result = array_search($query, $names);

var_dump(array_has_value($result));