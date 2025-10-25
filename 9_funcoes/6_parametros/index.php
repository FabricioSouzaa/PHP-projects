<?php

function velocidadeMaxima($vel) {

  if(is_int($vel)) {
    echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    }
  else {
    echo "Por favor, insira um número inteiro.";
  }

}

velocidadeMaxima(250);
velocidadeMaxima(350); // podemos 'reutilizar' a function com outros valores.
// velocidadeMaxima(); -> não podemos utilizar function que exige parâmetro sem valor, irá dar erro.
// velocidadeMaxima("teste") -> se for inserido outro valor diferente de um inteiro, irá aparecer uma mensagem avisando por conta do tratamento de dados realizado com o IF e ELSE.

function descreverAnimal($nome, $raca) {

  echo "O $nome é da raça $raca <br>";

}

descreverAnimal("Bob", "Vira-lata");
descreverAnimal("Mel", "PitBull");

?>