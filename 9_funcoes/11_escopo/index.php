<?php

  $a = 10;
  $b = 10.5;

  function escopoLocal($a) {

    $a = 100;
    global $b;
    // $b++; -> é possível incrementar valor caso seja necessário.

    echo "A variável A do escopo local é: $a <br>";
    echo "A variável de escopo GLOBAL B, sendo usada no escopo local é: $b <br>";

  }

  escopoLocal($a);

  echo "A variável A do escopo global é: $a <br>";
  echo "A variável B do escopo global é: $b <br>";

?>