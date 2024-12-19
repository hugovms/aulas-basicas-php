<?php

class Animal{
    public static function acao(){
        echo "Latir!";
    }

    public static function lista(){
        return [
            'Cachorro',
            'Gato',
            'Elefante',
            'Camelo'
        ];
    }
}

//Chamando com instância, se o método não fosse estático!
// $animal = new Animal();
// foreach($animal->lista() as $animal){
//     echo "<h3> {$animal} </h3>";
// }

//Chamando sem instância, método estático!
foreach(Animal::lista() as $animal){
    echo "<h3> {$animal} </h3>";
}