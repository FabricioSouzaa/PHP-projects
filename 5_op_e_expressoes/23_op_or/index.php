<?php

if (5 > 2 || 2 < 4) {
    echo "A expressão 1 é verdadeira <br>";
}

if (5 > 2 || 5 < 4) {
    echo "A expressão 2 é verdadeira <br>";
}

if (5 > 4 || 2 < 4) {
    echo "A expressão 3 é verdadeira <br>";
}

if (5 > 6 || 2 < 1) {
    echo "A expressão 4 é verdadeira <br>";
}

$a = 10;
$b = 15;
$c = 25;
$d = 35;

if ($a < $b || $d > $c) {
  echo "A expressão 5 é verdadeira <br>";
}

if (($a < $b || $d > $c) && $c < $d) {
  echo "A expressão 6 é verdadeira <br>"; // A expressão 6 é verdadeira porque a primeira parte é verdadeira e a segunda parte também
}