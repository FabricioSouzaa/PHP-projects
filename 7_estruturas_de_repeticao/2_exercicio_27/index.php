<?php

$arr = [true, 10, "vermelho", 10.5, "azul", 20, "verde", 30, "amarelo", 40];

$x = count($arr);
$y = 0;

while ($y <= $x) {
  if (is_string($arr[$y])) {
    echo $arr[$y] . "<br>";
  }
  $y++;
}
