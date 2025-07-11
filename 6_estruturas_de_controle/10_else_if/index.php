<?php

if(10 > 5) {
  echo "Entrou no if <br>";
} else if(10 > 6) {
  echo "Ficou no primeiro IF. <br>";
}


if(10 < 5) {
  echo "Entrou no segundo if <br>";
} else if(10 > 6){
  echo "Entrou no segundo else if <br>";
}


if(10 < 5) {
  echo "Entrou no ultimo else <br>";
} else if(10 < 6){
  echo "Entrou no else abaixo<br>";
} else {
  echo "Entrou no else real<br>";
}