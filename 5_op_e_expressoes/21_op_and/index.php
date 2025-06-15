<?php

if (5 > 10 && 10 > 5) { // false e true
    echo "Entrou no if 1 <br>";
}

if (50 > 10 && 10 > 9) {
    echo "Entrou no if 2 <br>"; // true e true
}

$a = 10;
$b = 5;
$c = 12;
$d = 15;

if ($a > $b && $c <= $d) {
    echo "Entrou no if 3 <br>"; // true e false
}

if ($b <= $a && $d >= $c) {
    echo "Entrou no if 4 <br>"; // true e true
}

if ($a === $b && $c !== $d) {
    echo "Entrou no if 5 <br>"; // false e true
}

if ($b !== $a && $c !== $d) {
    echo "Entrou no if 6 <br>"; // true e true
}