<?php

$texto = "Aula do dia!";

# aula_do_dia! 

$texto = str_replace(" ", "-", $texto);
$texto = strtolower($texto);
$texto = str_replace("!", "", $texto);

echo $texto; #saída aula_do_dia
echo "\n";

$dataHoje = '10/12/2024';
#10/12/2024
$dataHoje = str_replace("/", "-", $dataHoje);
echo $dataHoje;