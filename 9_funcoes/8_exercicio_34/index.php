<?php

function validarImparPar($numero) {

  if($numero % 2 == 0) {
    echo "O numero $numero é par <br>";
  } else {
    echo "O numero $numero é impar <br>";
  }

}

validarImparPar(10);
validarImparPar(17);

?>