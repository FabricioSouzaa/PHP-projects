<?php

$a = 10;

while ($a > 0) {

  if ($a === 5 || $a === 8) {

    echo "O loop foi pulado no valor de $a <br>";
    $a--;
    continue; // Pula o restante do loop quando $a é 5 ou 8
    
  }

  echo "contador geral: $a <br>";

  $a--;
}