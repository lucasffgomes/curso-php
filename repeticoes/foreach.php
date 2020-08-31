<div class="titulo">Foreach</div>

<?php
    // FOREACH percorre do primeiro ao ultimo valor passando em todos!
    
    $array = [
        1 => 'Domingo',
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sábado'
    ];

    // percorrendo somente os valores do array
    foreach ($array as $valor) {
        echo "$valor <br>";
    }

    // percorrendo chave e valor no array
    foreach ($array as $indice => $valor) {
        echo "$indice: $valor <br>";
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach ($matrix as $linha) {
        // echo "$linha <br>";

        foreach ($linha as $valor) {
            echo "$valor ";
        }
        echo "<br>";
    }

    $numeros = [1, 2, 3, 4, 5];
    foreach ($numeros as &$dobrar) {
        $dobrar *= 2;
        echo "$dobrar <br>";
    }
    print_r($numeros);