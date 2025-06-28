<?php

$idadeUm;
$idadeDois; // não preciso inicializar as variáveis aqui, pois já serão inicializadas logo abaixo
$idadeTres;

$idadeUm = 18;
$idadeDois = 30; // inicializando as variáveis com valores
$idadeTres = 15;

$msg = "Você é maior de idade! <br>";

if ($idadeUm >= 18) {
    echo "-> 1 <br>";
    echo $msg;
}

if ($idadeDois >= 18) {
   echo "-> 2 <br>";
    echo $msg;
}

if ($idadeTres >= 18) {
    echo "_> 3 <br>";
    echo $msg;
}