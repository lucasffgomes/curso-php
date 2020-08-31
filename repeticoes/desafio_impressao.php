<div class="titulo">Desafio Impressão</div>

<!--
    Enunciado:
    - Imprima apenas os valores do array que contém indice par;
    - Resolver com for e foreach;
    - Valores esperados: AAA, CCC, EEE;
-->

<?php
    $array = [
        'AAA',
        'BBB',
        'CCC',
        'DDD',
        'EEE',
        'FFF'
    ];

    // bloco FOR
    for ($item = 0; $item < count($array) ; $item++) {

        if ( $item % 2 == 0 ) {
            echo "{$array[$item]} <br>";
        } 
    }

    echo "<br><hr>";

    // bloco FOREACH
    foreach ($array as $chave => $valor) {

        if ($chave % 2 == 0){
            echo "{$array[$chave]} <br>";
        }
    }