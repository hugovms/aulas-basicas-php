<?php

abstract class Animal{
    public $nome;
    public $raca;


    public function descricao(){
        return "O nome desse animal é {$this->nome} de raça {$this->raca}";
    }

    abstract public function acao();
}


class Cachorro extends Animal{

    public function acao(){
        return "Latir.";
    }

    public function descricaoAnimal(){
        return parent::descricao() . " <br> De fato é um belo cachorro!";
    }

}

$bidu = new Cachorro();
$bidu->nome = 'Bidu o Cachorro';
$bidu->raca = 'Labrador';

echo $bidu->descricaoAnimal();
echo '<br>';
echo 'E sua função é: ' . $bidu->acao();