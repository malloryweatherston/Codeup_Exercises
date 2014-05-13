<?php 

//if ($argc < 3) {
  //   $progName = $argv[0];
    // echo "Please enter a starting number and an ending number!\n";
     //exit(1);
//}

//$minimum = $argv[1];
//$maximum = $argv[2];

fwrite(STDOUT, "Please enter the minimum number\n");

$minimum = fgets(STDIN); 

fwrite(STDOUT, "Please enter the maximum number\n");

$maximum = fgets(STDIN); 

for($i = $minimum; $i <= $maximum; $i = $i+1) {
	echo "{$i}\n";
}
fwrite(STDOUT, "Please choose an increment\n");

$increment = fgets(STDIN); 
for($i = $minimum; $i <= $maximum; $i = $i + $increment) {
	echo "{$i}\n";
}