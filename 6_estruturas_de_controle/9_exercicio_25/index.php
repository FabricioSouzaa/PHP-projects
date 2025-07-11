<?php

$number1 = 100;
$number2 = 2;
$name = "Fabrício";

if(is_int($number1)) {
  $vezesDois = $number1 * $number2;

  if($vezesDois >= 100) {
    echo "O número é maior ou igual a 100<br>";
  }
}


if(is_int($name)) {
  $vezesDois = $name * $number2;

  if($vezesDois >= 100) {
    echo "O número é maior ou igual a 100<br>";
  }
} else {
  echo "não é um número inteiro<br>";
}