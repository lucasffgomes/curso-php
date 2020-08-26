<div class="titulo">Operações</div>

<?php
    $dados1 = [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados2 = [
        "naturalidade" => "Fortaleza"
    ];

    $dados2["endereco"] = "Rua A";

    $dadosCompletos = $dados1 + $dados2;
    print_r($dadosCompletos);

    echo "<br>" . is_array($dadosCompletos);  // verifica se euma variavel é array
    echo "<br>" . count($dadosCompletos);  // conta a qtde de elementos no Array

    echo "<br>";
    $indice = array_rand($dadosCompletos);  // pega um indice randomico do array
    echo "$indice = $dadosCompletos[$indice]";
    echo "<br>";
    echo "{$dadosCompletos['idade']}";
    echo " ${dadosCompletos['idade']}";
    
    unset($dadosCompletos["nome"]);  // remover uma chave do array
    echo "<br>";
    print_r($dadosCompletos);

    unset($dadosCompletos);
    echo "<br>";
    var_dump($dadosCompletos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $decimais = $pares + $impares;
    echo "<br>";
    print_r($decimais);

    $decimais = array_merge($pares, $impares);  // coloca os indices de acordo com o parametro passado
    echo "<br>";
    print_r($decimais);

    sort($decimais);  // coloca os indices em ordem crescente
    echo "<br>";
    print_r($decimais);
