<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $physicists_array = explode(', ', $physicists_string);

// var_dump($physicists_array);

// $physicists_string  = implode(', ' , $physicists_array); 

// echo $physicists_string;

// Converts array into list n1, n2, ..., and n3
function humanized_list($string) {
  $array = explode(',' , $string);
  $pop = array_pop($array);
  $newstring = implode(',' , $array); 
   
  
  return "$newstring and $pop\n"; 
}
  



// List of famous peeps
//$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";