<div class="titulo">Closure & Callable</div>

<?php
    $soma1 = function($a, $b) {
        return $a + $b;
    };

    function soma2($a, $b) {
        return $a + $b;
    };

    echo $soma1(2, 3) . ' ';
    echo (is_callable($soma1) ? 'Sim' : 'Não)' . '<br>';
    
    echo soma2(2, 3) . ' ';
    echo (is_callable(soma2) ? 'Sim' : 'Não)' . '<br>';

    var_dump($soma1);

    function executar($a, $b, $op, Callable $funcao) {
        $resultado = $funcao($a, $b) ?? 'Nada';
        echo "$a $op $b = resultado<br>";
    }

    echo '<br>';
    executar(2, 3, '+', $soma1);
    executar(2, 3, '+', soma2);

    // com dúvida -----------------------------------------------------------------