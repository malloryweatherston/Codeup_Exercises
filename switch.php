<?php 


// Set the default timezone
date_default_timezone_set('America/Chicago');

//Get Day of Week as number
//1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        echo "{$day_of_week} is Monday\n";
        break;
    case 2:
    	echo "{$day_of_week} is Tuesday\n";
    	break;
    case 3:
    	echo "{$day_of_week} is Wednesday\n";
    	break;
    case 4:
    	echo "{$day_of_week} is Thursday\n";
    	break;
    case 5:
    	echo "{$day_of_week} is Friday\n";
    	break;
    case 6:
    	echo "{$day_of_week} is Saturday\n";
    	break;
    case 7:
    	echo "{$day_of_week} is Sunday\n";
    	break;
}
 

if ($day_of_week == 1) {
	echo "{$day_of_week} is Monday\n";
} elseif ($day_of_week == 2) {
	echo "{$day_of_week} is Tuesday\n"; 
} elseif ($day_of_week == 3 )  {
	echo "{$day_of_week} is Wednesday\n"; 
} elseif ($day_of_week == 4 )  {
 	echo "{$day_of_week} is Thursday\n";
 } elseif ($day_of_week == 5 )  {
 	echo "{$day_of_week} is Friday\n";
 } elseif ($day_of_week == 6 )  {
	echo "{$day_of_week} is Saturday\n";   
 } elseif ($day_of_week == 7 )  {
	echo "{$day_of_week} is Sunday\n"; 
} 