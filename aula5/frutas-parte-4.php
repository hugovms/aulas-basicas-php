<?php

class BancoDeDados {

    function criarDado($cor){
        echo "Cria informação no banco de dados de cor: " . $cor . "<br>";
    }

    function atualizaDado(){
        echo "Atualiza informações no banco de dados";
    }

    function deletaDado(){
        echo "Deleta dados do banco de dados ";
    }

}

class Fruta extends BancoDeDados {
    
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


    function criarNoBanco(){
        echo $this->nome . ' Vai ser criada no banco de dados <br>';
        $this->criarDado($this->cor);
    }
}

class Feira extends BancoDeDados{

    function criarNoBanco(){
        echo "Criar a banca da dona Maria vendedora de salgado <br>";
        $this->criarDado('Verde Lima');
    }

}

$feira = new Feira();
$feira->criarDado("Amarelo Bonito");


$banana = new Fruta("Banana Nanica", "Amarelo", 4.99);

$maça = new Fruta("Maçã Fuji", "Vermelha", 8.99);

echo $banana->criarNoBanco();
echo '<br>';  
 