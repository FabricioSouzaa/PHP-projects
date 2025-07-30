<?php

$x = 0;

while ($x < 10) {
  echo "O valor de X é: $x <br>";
  $x++;
    if ($x === 5) {
      echo "O loop foi interrompido no valor de $x <br>";
      break;
    }
}