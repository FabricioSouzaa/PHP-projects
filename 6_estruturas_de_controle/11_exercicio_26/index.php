<?php

$velocidade1 = 35;
$velocidade2 = 40;
$velocidade3 = 120;
$velocidadeCorreta = 40;

if ($velocidade1 < $velocidadeCorreta) {
    echo "Velocidade 1 está abaixo do limite permitido.<br>";
} else if ($velocidade1 > $velocidadeCorreta) {
    echo "Velocidade 1 está acima do limite permitido.<br>";
} else {
    echo "Velocidade 1 está no limite permitido.<br>";
}

if ($velocidade2 < $velocidadeCorreta) {
    echo "Velocidade 2 está abaixo do limite permitido.<br>";
} else if ($velocidade2 > $velocidadeCorreta) {
    echo "Velocidade 2 está acima do limite permitido.<br>";
} else {
    echo "Velocidade 2 está no limite permitido.<br>";
}

if ($velocidade3 < $velocidadeCorreta) {
    echo "Velocidade 3 está abaixo do limite permitido.<br>";
} else if ($velocidade3 > $velocidadeCorreta) {
    echo "Velocidade 3 está acima do limite permitido.<br>";
} else {
    echo "Velocidade 3 está no limite permitido.<br>";
}