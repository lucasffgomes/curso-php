<div class="titulo">Recursividade</div>

<?php
    function somaAteUm($numero) {
        $soma = 0;
        for(; $numero >= 1; $numero--) {
            $soma += $numero;
        }
        return $soma;
    }

    echo somaAteUm(10) . '<br>';

    function somaRecursivaUmAte($numero) {
        // condição de parada
        if($numero === 1) {
            return 1;
        }
        return $numero + somaRecursivaUmAte($numero - 1);
    }

    echo somaRecursivaUmAte(10) . '<br>';

    function somaRecursivaEconomica($numero) {
        return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
    }

    echo somaRecursivaEconomica(150) . '<br>';

    // dúvida --------------------------------------------------------------------------