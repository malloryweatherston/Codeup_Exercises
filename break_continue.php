<?php

 for ($i = 1; $i <= 100; $i = $i + 1) {
     if ($i % 2 == 0) {
     	echo $i . "\n";
         continue; 
     } 
 } 

for ($i = 1; $i <= 100; $i = $i + 1) {
	echo $i . "\n";
    if ($i == 10) {
        break; 
    } 
} 