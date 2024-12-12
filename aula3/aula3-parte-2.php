<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vermelho{
            background-color: #000;
            color: red;
        }

        .azul{
            color: blue;
        }

        .rosa{
            background-color: pink;
            color: palevioletred;
        }

        .verde{
            color: green;
            background-color: yellow;
        }

        .cinza{
            background-color: black;
            color: gray;
        }
    </style>
</head>
<body>

<?php

$nomes = [
    ['nome' => 'Monnaliza da Rocha Sousa', 'status' => 'Autorizada'],
    ['nome' => 'Hugo Vieira Mariano da Silva', 'status' => 'Negado'],
    ['nome' => 'Gustavo Nunes Silva', 'status' => 'Autorizada'],
    ['nome' => 'Alandelon Bernardo de Oliveira', 'status' => 'Negado'],
    ['nome' => 'Bruno', 'status' => 'Pendente']
];

foreach($nomes as $convidado){
    $cor = '';
    switch($convidado['status']):
        case 'Autorizada':
            $cor = 'verde';
            break;
        case 'Negado':
            $cor = 'vermelho';
            break;
        case 'Pendente':
            $cor = 'cinza';
            break;
        default:
            $cor = 'cinza';
            break;
    endswitch;

    echo '<h3>'. $convidado['nome'] . '&nbsp; &nbsp; <span class="' . $cor . '">' . $convidado['status'] .'</span> </h3>';
}

?>

</body>
</html>