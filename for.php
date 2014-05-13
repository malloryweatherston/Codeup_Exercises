<?php 

fwrite(STDOUT, "Please enter the minimum number\n");

$minimum = trim(fgets(STDIN)); 

fwrite(STDOUT, "Please enter the maximum number\n");

$maximum = trim(fgets(STDIN)); 

if (!is_numeric($minimum) || !is_numeric($maximum)) {
	echo "You must enter a numeric value!\n";
	exit(1);
}

for($i = $minimum; $i <= $maximum; $i = $i+1) {
	echo "{$i}\n";
}
fwrite(STDOUT, "Please choose an increment\n");

$increment = trim(fgets(STDIN)); 
if ($increment == "") {
	$increment = 1;
}
for($i = $minimum; $i <= $maximum; $i = $i + $increment) {
	echo "{$i}\n";
}

