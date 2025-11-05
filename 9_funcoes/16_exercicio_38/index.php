<?php

  $arrItens = ["rice", "beans", "beef", "beer"];

  function supermarket($lista) {

    $string = "Você levou estes itens do mercado: ";

    for($i = 0; $i < count($lista); $i++)

      if($i + 1 == count($lista)) {
        $string .= "$lista[$i].";
      } else {
        $string .= "$lista[$i], ";
      }

  return $string;

  }

  echo supermarket($arrItens);