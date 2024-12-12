<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 1px solid black;
        }
        table{
            width: 100%;
        }
    </style>
</head>
<body>

<?php
    $alunos = [
        ['nome' => 'Alandelon', 'idade' => '24', 'genero' => 'M'],
        ['nome' => 'Gustavo', 'idade' => '18', 'genero' => 'M'],
        ['nome' => 'Monnaliza', 'idade' => '20', 'genero' => 'F'],
    ];
?>


<table>
    <tr>
        <td>Nome</td>
        <td>Idade</td>
        <td>Gênero</td>
        <td>Ações</td>
    </tr>
    <?php
        foreach($alunos as $aluno){
            $genero = $aluno['genero'] == 'M' ? 'Masculino' : 'Feminino';
            echo "<tr>";
                echo "<td>". $aluno['nome'] ."</td>";
                echo "<td>". $aluno['idade'] ."</td>";
                echo "<td>". $genero ."</td>";
                echo "<td> <a href='#'> Editar </a> - <a href='#'> Excluir </a></td>";
            echo "</tr>";
        }
    ?>

</table>

</body>
</html>