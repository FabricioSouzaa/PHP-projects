<?php

$x = 4;
$limite = 30;

while ($x < $limite) {
  echo "O valor de X é: $x <br>";
  $x += 2;
  if ($x === 24) {
    echo "O loop foi interrompido no valor de $x <br>";
    break;
  }
}