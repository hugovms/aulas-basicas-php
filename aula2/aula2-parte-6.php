<?php

$cpf = '333.444.555-60';

// $cpf = str_replace('.', '', $cpf);
// $cpf = str_replace('-', '', $cpf);

$cpf = preg_replace('/[^a-zA-Z0-9]+/', '', $cpf);
echo $cpf;

