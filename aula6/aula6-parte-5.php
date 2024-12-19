<?php

trait mensagem{
    public function msg(){
        echo "Orientação a Objetos é muito divertida!";
    }
}


trait despedida{
    public function tchau(){
        echo "Até mais meu amigo! Tchau, tchau!";
    }
}

class BemVindo {
    use mensagem, despedida;
}

$objeto = new BemVindo();
$objeto->msg();
echo "<br>";
$objeto->tchau();


