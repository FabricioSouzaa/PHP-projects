<?php

$arr = [];

for($a = 10; $a <= 20; $a++) {
  array_push($arr, $a);
}

print_r($arr);
echo "<br>";

for($a = 0; $a < count($arr); $a++)
  if($arr[$a] % 2 != 0) {
    echo "O numero é impar: $a <br>";
}