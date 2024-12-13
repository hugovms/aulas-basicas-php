<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$usuarios = [
    'Hugo' => '123456',
    'Alandelon' => 'Bicicleta',
    'Gustavo' => 'JiuJitsu'
];

$mensagens = [];
$erros = [
    'senha' => 'A senha não pode estar vazia!',
    'nome' => 'O nome não pode estar vazio!'
];

//is_null .=
if(empty($nome)){
   $mensagens[] = $erros['nome'];
}

if(empty($senha)){
   $mensagens[] = $erros['senha'];
}

if(strlen($nome) <= 3){
    echo 'Seu nome deve ter mais do que 3 letras!';
    return;
}

if(strlen($senha) <= 3){
    echo 'Sua senha deve ter mais do que 3 caracteres!';
    return;
}

if(!isset($usuarios[$nome])){
    echo 'Usuário não existente!';
    return;
}

if($senha !== $usuarios[$nome]){
    echo 'Senha incorreta! Tente novamente.';
    return;
}

foreach($mensagens as $msg){
    echo $msg;
    echo '<br>';
}

if(count($mensagens) > 0) return;

echo '<h2>';
echo 'Bem-vindo ' . $nome . ' Ao Sistema da Aula 4';
echo '</h2>';