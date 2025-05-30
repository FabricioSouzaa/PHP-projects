<?php

  $arr = [
    'name' => 'Fabrício', 
    'age' => 24, 
    'favcolor' => 'black'
  ];

  echo $arr['name'];
  echo "<br>";
  print_r($arr);
  echo "<br>";
  echo $arr['favcolor'];
  echo "<br>";
  // Associative array

  $arrAssoc = [
    'chave' => 'valor',
    'bool' => true
  ];

  print_r($arrAssoc);
  echo "<br>";

  $arrCar = [
    'marca' => 'Porsche',
    'modelo' => 'GT3',
    'ano' => 2024,
    'cor' => 'Azul'
  ];

  print_r($arrCar);
  echo "<br>";
  echo $arrCar['modelo'];
  echo "<br>";
  echo $arrCar['cor'];