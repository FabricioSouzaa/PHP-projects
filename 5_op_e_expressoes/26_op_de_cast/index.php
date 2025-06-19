<?php

$a = (int) "12";

echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

if ($a === 12) {
  echo "A é identico a 12 <br>";
}

if ($a === "12") {
  echo "A é identico a 12 <br>";
}

$b = (float) "10.5";

echo $b;
echo "<br>";
echo $b + 10;
echo "<br>";

if ($b === "10.5") {
  echo "B é identico a 10.5 em string <br>";
}

if ($b === 10.5) {
  echo "B é identico a 10.5 <br>";
}