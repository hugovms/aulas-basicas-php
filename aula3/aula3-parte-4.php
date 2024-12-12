<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $alunos = [
        ['Gustavo' => 18],
        ['Alandelon' => 24],
        ['Monnaliza' => 20],
    ];
 
    asort($alunos);
    echo '<br> Array multidimensional com ordenação (asc)! <br>';
    echo '<ul>';

    foreach($alunos as $aluno){
        $nome = key($aluno);
        echo '<li>' . $nome . ' de idade: '. $aluno[$nome] . ' anos </li>';
    }
    echo '</ul>';
        
    // print_r($codigos);

    // var_dump($codigos);
?>

</body>
</html>