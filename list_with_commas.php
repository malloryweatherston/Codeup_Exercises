<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $sort_array = false) {
  $array = explode(', ' , $string);
  if ($sort_array === true) {
    sort($array);
  }
  //$array = sort($array); 
  $pop = array_pop($array);
  $newstring = implode(', ' , $array); 
  return "$newstring, and $pop\n";

  
}
  



// List of famous peeps
//$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";