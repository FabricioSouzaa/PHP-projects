<?php

$a = 10;

function escopoLocal() {

  $a = 1;
  $a++;

  echo "O Escopo local de A: $a <br>";

}

escopoLocal();

echo "O Escopo global de A: $a <br>";

?>