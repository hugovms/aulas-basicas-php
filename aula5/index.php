{
    "user": {
        "name": "hugo",
        "idade": "24",
        "telefone": "(61) 98409-8659"
    }
}

$user = new User();
$user->name = 'Monnaliza';
$user->idade = '21';
$user->telefone = '2222222';
$user->save();


$valor = somarValoresEMultiplicar(4, 5);
//retornar 18

$valor = somarValoresEMultiplicar(4, 7);
//retornar 22

$valor = somarValoresEMultiplicar(10, 10);
//retornar 40

public function somarValoresEMultiplicar($valor1, $valor2){
    $soma = $valor1 + $valor2;
    return $soma * 2 / 10;
}


