<?php

class Fruta {

    public $nome;
    public $cor;
    public $valor;

    function set_nome($nome){
        $this->nome = $nome;
    }

    function get_nome(){
        return $this->nome;
    }

    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_cor(){
        return $this->cor;
    }   

    function set_valor($valor){
        $this->valor = $valor;
    }

    function get_valor(){
        return $this->valor;
    }

}



$banana = new Fruta();
$banana->set_nome('Banana Nanica');
$banana->set_cor('Amarelo');
$banana->set_valor(4.99);

$maça = new Fruta();
$maça->set_nome('Maçã Fuji');
$maça->set_cor('Vermelha');
$maça->set_valor(8.99);


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
