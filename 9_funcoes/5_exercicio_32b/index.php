<?php

function nomeCompleto() {

  $nome = "Fabrício";
  $sobrenome = "Souza";
  $fullName = $nome . " " . $sobrenome;

  echo $fullName;

 // echo $nome . " " . $sobrenome; -> caso não tenha a variável concatenada é possível imprimir dessa maneira.

}

echo nomeCompleto();

?>