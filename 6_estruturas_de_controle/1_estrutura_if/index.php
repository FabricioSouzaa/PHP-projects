<?php

// controle de fluxo com if
if(5 > 2) {
  echo "5 é maior que 2 . <br>";
} else {
  echo "5 não é maior que 2";
}

//condição false
if(10 < 3) {
  echo "Não vai entrar no IF pois deu false";
}

// utilizando if com operadores lógicos
if(10 === 10 && 9 > 5) {
  echo "10 é igual a 10 e 9 é maior que 5 . <br>";
} else {
  echo "A condição não foi atendida";
}

$a = 10;
$b = 20;
$c = "Deu certo, entrou no IF com variáveis";

// utilizando if com variáveis
if ($a <= $b) {
  echo $c . "<br>";
}