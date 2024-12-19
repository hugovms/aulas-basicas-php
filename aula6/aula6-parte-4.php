<?php
 
interface BancoDeDados {
    public function criar();
    public function visualizar();
    public function atualizar();
    public function excluir();
}

class Gato implements BancoDeDados{

    public function criar(){
        return 'Cria informação no banco de dados';
    }

    public function visualizar(){
        return 'Visualiza informação no banco de dados';
    }

    public function atualizar(){
        return 'Atualiza informação no banco de dados';
    }

    public function excluir(){
        return 'Exclui informação no banco de dados';
    }
}

$animal = new Gato();
echo $animal->criar();
echo '<br>';
echo $animal->visualizar();
echo '<br>';
echo $animal->atualizar();
echo '<br>';
echo $animal->excluir();
echo '<br>';
