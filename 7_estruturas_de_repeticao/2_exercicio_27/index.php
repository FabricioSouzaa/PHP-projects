<?php

$arr = ["Fabrício", 1, true, 1.5, "PHP", "Curso", 40, "Estruturas de Repetição", "Array", "Loop", "While", 4.5];
$tamArr = count($arr); // Obtendo o tamanho do array
$a = 0;

while ($a < $tamArr) {

  if(is_string($arr[$a])) { // Verifica se o elemento é uma string
    echo $arr[$a] . "<br>";
  }
  $a++; // Incrementa o contador
}