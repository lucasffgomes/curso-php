<div class="titulo">Laço For</div>

<?php
    // todo FOR tem 3 partes mas nao obrigatoriamente precisam estar preenchidas.
    
    // for conta até 5 e sai.
    for( $cont = 1; $cont <= 5; $cont++ ){
        echo "$cont <br>";
    }
    echo "<hr>";
    
    // aqui tem 2 partes
    for ( ; $cont <= 10 ; $cont++ ){ 
        echo "$cont <br>";
    }
    echo "<hr>";
    
    for( ; $cont <= 15; ){
        echo "$cont <br>";
        $cont++;
    }
    
    $array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    print_r($array);
    echo "<hr>";

    for( $item = 0; $item < count($array); $item++ ){
        echo "{$array[$item]} <br>";
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    for( $item = 0; $item < count($matrix); $item++ ){
        for( $j = 0; $j < count($matrix[$item]); $j++ ){
            echo "{$matrix[$item][$j]} ";
        }
        echo "<br>";
    }