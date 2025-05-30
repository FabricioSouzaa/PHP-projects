<?php

$arr = [
    'name' => 'Fabrício',
    'age' => 16,
    'city' => 'Santa Catarina'
];

print_r($arr);
echo "<br>";

if ($arr['age'] >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}