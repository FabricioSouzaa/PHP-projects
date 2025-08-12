<?php

function velocidadeMaxima($vel) {

  echo "O carro atinge a velocidade máxima de $vel km/h <br>";

}

velocidadeMaxima(250);
velocidadeMaxima(300); // podemos 'reutilizar' a function com outros valores.
// velocidadeMaxima(); -> não podemos utilizar function que exige parâmetro sem valor, irá dar erro.

?>