<div class="titulo">While / Do While</div>

<?php
    const VALOR_LIMITE = 5;
    $contador = 0;

    // while--------------------------------------------
    while ($contador < VALOR_LIMITE) {
        echo "while $contador <br>";
        $contador++;
    }

    $contador = 0;
    // for----------------------------------------------
    for (;$contador < VALOR_LIMITE;) {
        echo "for $contador <br>";
        $contador++;
    }

    // for----------------------------------------------
    for ($contador = 0; $contador < VALOR_LIMITE; $contador++) {
        echo "for $contador <br>";
    }

    $contador = 0;
    // do-while-----------------------------------------
    do {
        echo "do-while $contador <br>";
        $contador++;
    } while ($contador < VALOR_LIMITE);

    $contador = 0;
    while (true) {
        echo "while(true) $contador <br>";
        $contador++;
        if ($contador >= VALOR_LIMITE) break;
    }