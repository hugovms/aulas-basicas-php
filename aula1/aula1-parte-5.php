<?php

$alunos = [
    ['nome' => 'Alandelon', 'idade' => '24', 'genero' => 'M'],
    ['nome' => 'Gustavo', 'idade' => '18', 'genero' => 'M'],
    ['nome' => 'Monnaliza', 'idade' => '20', 'genero' => 'F'],
];

foreach($alunos as $aluno){
    $aluno['idade'] = $aluno['idade'] + 10;

    $textoMasculino = "O aluno é: " . $aluno['nome'] . ' e a idade dele é: ' . $aluno['idade'] . " Anos \n\n";
    $textoFeminino = "A aluna é: " . $aluno['nome'] . ' e a idade dela é: ' . $aluno['idade'] . " Anos \n\n";

    if($aluno['nome'] == 'Gustavo' || $aluno['nome'] == 'Monnaliza'){
        $textoMasculino .= "E ele é muito bonito.\n\n";
        $textoFeminino .= "E ela é muito bonita\n\n";
    }

    if($aluno['genero'] == 'M'){
        echo $textoMasculino;
    }

    if($aluno['genero'] == 'F'){
        echo $textoFeminino;
    }


}