<?php

$x = 1;

while ($x < 15) {
  echo $x . "<br>";
  $x += 1;  // ou $x = $x + 1; -> ou $x++
}

echo "<br>";

$y = 10;

while ($y <= 100) {
  echo $y . "<br>";
  $y += 10;
}

echo "<br>";

$z = 10;

while ($z > 0) {
  echo $z . "<br>";
  $z -= 1;  // ou $z = $z - 1; -> ou $z--
}