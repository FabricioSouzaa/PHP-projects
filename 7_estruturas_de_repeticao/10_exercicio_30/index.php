<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for($contador = 0; $contador < count($arr); $contador++) {
    if($arr[$contador] % 2 == 0) {
      echo "Numero par: " . $arr[$contador] . " <br> ";
    }
}