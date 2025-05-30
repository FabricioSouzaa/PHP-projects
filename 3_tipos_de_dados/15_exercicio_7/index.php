<?php

  $pessoa = [
    'nome' => 'Matheus',
    'idade' => 25,
    'profissao' => 'Programador',
    'graduacao' => 'Sistemas da Informação'
  ];

  $maioridade = 18;

  // desafio
  if($pessoa['idade'] >= $maioridade) {
    echo "A pessoa é maior de idade!";
  }