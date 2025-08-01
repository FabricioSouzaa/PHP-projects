<?php

$nome = "Fabrício";

for ($i = 1; $i <= 15; $i++) {

  echo "Numero: $i <br>";

  if ($i == 4) {
    echo "$nome no lugar do $i <br>";
    continue;
  }

  if ($i === 12) {
    echo "$nome no lugar do $i <br>";
    break;
  }

}