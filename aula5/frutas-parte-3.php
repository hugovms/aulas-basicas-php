<?php

class Fruta {
    
    public $nome;
    private $cor;
    public $valor;

    function __construct($nome, $cor, $valor){
        $this->nome = $nome;
        $this->cor = $cor;
        $this->valor = $valor;
    }

    public function apresentacao(){
        echo "O nome dessa fruta é {$this->nome} de cor {$this->cor} com o valor de R$ {$this->valor}";
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

$banana = new Fruta("Banana Nanica", "Amarelo", 4.99);

$maça = new Fruta("Maçã Fuji", "Vermelha", 8.99);

echo $banana->apresentacao();
echo '<br>';

echo '<br> <br>';
echo $maça->apresentacao(); 


class Tomate extends Fruta {
    public function mensagem(){
        echo "Eu sou uma fruta ou um vegetal?";
    }
}

echo '<br><br>';
$tomatinho = new Tomate("Tomate Cereja", "Vermelho", 7.59);
$tomatinho->mensagem();
echo '<br><br>';
$tomatinho->apresentacao();
echo '<br><br>';
$tomatinho->set_cor("Vermelho Escarlate");
echo $tomatinho->get_cor();