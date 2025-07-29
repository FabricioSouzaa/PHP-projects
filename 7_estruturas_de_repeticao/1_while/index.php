<?php

$x = 0;  // Definindo o contador.

while ($x < 10) {

  // Corpo do loop
  echo $x . "<br>";
  $x = $x + 1; // ou $x++

}

echo "continuando o código <br>";

$y = 25; // Definindo o contador.

while ($y > 10) {

  echo $y . "<br>";
  $y = $y - 1; // ou $y--

}

echo "continuando o código 2<br>";

$a = 25; // Definindo o contador.

while ($a > 10) {

  if($a % 2 != 0) { // Verifica se é impar, se sim, imprime
    echo $a . "<br>";
  }
  $a--; // ou $a = $a - 1;

}