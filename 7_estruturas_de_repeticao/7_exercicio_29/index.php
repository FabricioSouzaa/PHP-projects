<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$contador = 0;

while (is_int($arr[$contador])) {
  
  if ($arr[$contador] === 30 || $arr[$contador] === 40) {

    echo "O loop foi pulado no valor de " . $arr[$contador] . "<br>";
    $contador++;
    continue; // Pula o restante do loop quando o valor é 30 ou 40
  }
  
  echo "O valor do contador é: {$arr[$contador]} <br>";
  $contador++;

}