<?php

$nomes = [
    'Monnaliza da Rocha Sousa',
    'Hugo Vieira Mariano da Silva',
    'Gustavo Nunes Silva',
    'Alandelon Bernardo de Oliveira',
    'Bruno'
];

foreach($nomes as $convidado){
    $explodido = explode(' ', $convidado);
    $buscaIndex = array_search('da', $explodido);

    if(gettype($buscaIndex) == 'integer'){
        array_splice($explodido, $buscaIndex, 1);
    }

    $primeiroNome = isset($explodido[0]) ? $explodido[0] : '';  
    $sobrenome = isset($explodido[1]) ? $explodido[1] : '         ';  

    $nomeConvidado = $primeiroNome . ' ' . $sobrenome;
    $nomeConvidado = trim($nomeConvidado);
    
    echo "\n Olá Sr." . $nomeConvidado . " Seu evento está confirmado com sucesso! \n";
}

