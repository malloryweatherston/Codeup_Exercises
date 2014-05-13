<?php 
//Prompt the user for a minimum number
fwrite(STDOUT, "Please enter the minimum number\n");
//assign input to a variable
$minimum = trim(fgets(STDIN)); 
//Prompt the user for a maximum number
fwrite(STDOUT, "Please enter the maximum number\n");
//assign input to a variable
$maximum = trim(fgets(STDIN)); 
//Tell the user if their input is a non-numeric value
if (!is_numeric($minimum) || !is_numeric($maximum)) {
	echo "You must enter a numeric value!\n";
	exit(1);
}
//output a for loop
for($i = $minimum; $i <= $maximum; $i = $i+1) {
	echo "{$i}\n";
}
fwrite(STDOUT, "Please choose an increment\n");
//assign input to a variable and if statement to see set default 
$increment = trim(fgets(STDIN)); 
if ($increment == "") {
	$increment = 1;
}
for($i = $minimum; $i <= $maximum; $i = $i + $increment) {
	echo "{$i}\n";
}

