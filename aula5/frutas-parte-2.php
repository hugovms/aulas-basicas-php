<?php

class Fruta {
    
    public $nome;
    private $cor;
    public $valor;

    function __construct(){
    }

    function set_cor($cor){
        $this->cor = strtoupper($cor);
    }

    function get_nome(){
        return $this->nome;
    }

    function get_cor(){
        return $this->cor;
    }   
 
    function get_valor(){
        return $this->valor;
    }

}

$banana = new Fruta();
$banana->nome = "Banana Nanica"; 
$banana->set_cor("Amarelo"); 
$banana->valor = 4.99;

$maça = new Fruta();
$maça->nome = "Maçã Fuji";
$maça->set_cor("Vermelha");
$maça->valor = 8.99;

echo 'Nome: ' . $banana->get_nome();
echo '<br>';
echo 'Coloração: ' . $banana->get_cor();
echo '<br>';
echo 'Preço: ' . $banana->get_valor();

echo '<br> <br>';
echo 'Nome: ' . $maça->get_nome();
echo '<br>';
echo 'Coloração: ' . $maça->get_cor();
echo '<br>';
echo 'Preço: ' . $maça->get_valor();
