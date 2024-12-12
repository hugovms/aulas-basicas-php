<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $codigos = [
        '555',
        '01',
        '06',
        '03',
        '222',
        '02',
        '04',
        '05',
        '24'   
    ];


    echo 'Esse array tem o total de: ' . count($codigos) . ' Items <br>';

    //Array sem SORT sem ordenação
    echo '<br> Array sem ordenação! <br>';
    echo '<ul>';
    foreach($codigos as $cod){
        echo '<li>' . $cod . '</li>';
    }
    echo '</ul>';

    //ordenação do menor para o maior
    sort($codigos);
    echo '<br> Array com ordenação (asc)! <br>';
    echo '<ul>';
    foreach($codigos as $cod){
        echo '<li>' . $cod . '</li>';
    }
    echo '</ul>';

    //Ordenação do maior para o menor
    rsort($codigos);
    echo '<br> Array com ordenação inversa (desc)! <br>';
    echo '<ul>';
    foreach($codigos as $cod){
        echo '<li>' . $cod . '</li>';
    }
    echo '</ul>';

    // print_r($codigos);

    // var_dump($codigos);
?>

</body>
</html>