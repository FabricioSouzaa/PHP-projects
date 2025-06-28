<?php

$nome = "Fabrício";
$idade = 24;
$altura = 1.80;
$casado = false;

if (is_int($nome)) {
  echo "O nome é um dado do tipo inteiro. <br>";
} else {
  echo "O nome não é um tpo de dado inteiro. <br>";
}

if (is_int($idade)) {
  echo "A idade é um tipo de dado inteiro. <br>";
} else {
  echo "A idade não é um tipo de dado inteiro. <br>";
}

if (is_int($altura)) {
  echo "É um inteiro. <br>";
} else {
  echo "A altura não é um tipo de dado inteiro. <br>";
}

if (is_int($casado)) {
  echo "O estado civil é um tipo de dado inteiro. <br>";
} else {
  echo "O estado civil não é um tipo de dado inteiro. <br>";
}