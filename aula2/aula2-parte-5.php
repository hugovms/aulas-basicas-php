<?php

$nomes = [
    'Monnaliza da Rocha Sousa',
    'Hugo Vieira Mariano da Silva',
    'Gustavo Nunes Silva',
    'Alandelon Bernardo de Oliveira',
    'Bruno'
];

foreach($nomes as $convidado){
    $convidado = substr($convidado, 2,  5);
    echo $convidado;
    echo "\n";
}

