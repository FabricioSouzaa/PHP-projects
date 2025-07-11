<?php

if(10 > 7) {
  echo "Entrou no primeiro if<br>";

  if("teste" == "teste") {
    echo "Entrou no segundo if<br>";
  }
} 


if(10 < 150) {
  echo "Entrou no primeiro if 2<br>";

  if("teste" != "teste") {
    echo "Entrou no segundo if 2<br>";
} else {
  echo "Entrou no else do segundo if 2<br>";
  }
}


if(10 > 150) {
  echo "Entrou no primeiro if 2<br>";

  if("teste" != "teste") {
    echo "Entrou no segundo if 2<br>";
} else {
  echo "Entrou no else do segundo if 2<br>";
  }
} else {
  echo "Entrou no else, parça<br>";
}