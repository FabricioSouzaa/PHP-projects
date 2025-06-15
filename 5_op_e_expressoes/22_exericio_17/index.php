<?php

// comparação
if (15 > 5 && 'Joao' === 'Joao') {
  echo "Entrou no if 1 <br>"; // true e true
}

if ((int)"teste" > 5 && 1) {
  echo "Entrou no if 2 <br>";
}

if (2 == 3 && 5 <= 3) {
  echo "Entrou no if 3 <br>"; // false e false
}