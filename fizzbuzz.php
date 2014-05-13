<?php

for($i = 1; $i <= 100; $i = $i + 1) {
  if ($i % 5 == 0 && $i % 3 == 0) {
	echo "FIZZBUZZ\n";
} elseif ($i % 3 == 0) {
	echo "FIZZ\n";
} elseif ($i % 5 == 0) {
    echo "BUZZ\n";
} else {
	echo "{$i}\n";
} }