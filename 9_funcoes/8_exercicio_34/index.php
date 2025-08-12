<?php

  function parOuImpar($number) {

    if($number % 2 === 0 ) {
      echo "O numero $number é par <br>";
    } else {
        echo "O numero $number é impar <br>";
      }
    }

  parOuImpar(20);
  parOuImpar(33);

?>