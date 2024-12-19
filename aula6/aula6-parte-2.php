<?php
 
interface Animal {
    public function acao();
    public function raca();
}

class Gato implements Animal{

    public function acao(){
        return 'Miau!';
    }

    public function raca(){
        return "Siamês";
    }
}

$animal = new Gato();
echo $animal->acao();
echo '<br>';
echo 'E a raça dele é ' . $animal->raca();