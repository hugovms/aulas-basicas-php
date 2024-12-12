<?php

$alunos = [
    ['nome' => 'Alandelon', 'nota' => 10, 'turma' => '1 B'],
    ['nome' => 'Gustavo', 'nota' => 5, 'turma' => '1 C'],
    ['nome' => 'Monnaliza', 'nota' => 3, 'turma' => '1 D'],
];

foreach($alunos as $key => $aluno){
    echo $alunos[$key]['nome'];
    echo "\n";

    if($alunos[$key]['nota'] < 5){
        echo "Não passou no teste \n";
    }

    if($alunos[$key]['nota'] == 5){
        echo "Você é bem mediano hein?! \n";
    }

    if($alunos[$key]['nota'] > 5){
        echo "Você passou no teste! \n";
    }

    if($alunos[$key]['nota'] >= 8){
        echo "Sua nota foi muito boa! Parabéns. \n";
    }
}