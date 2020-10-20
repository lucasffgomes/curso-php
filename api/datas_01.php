<div class="titulo">Datas #01</div>

<?php
    echo time() . '<br>';  // mostra a quantidade de segundos que passou desde 01/01/1970.
    echo date('D, d \d\e M \d\e Y.') . '<br>';  // Dia, XX de Mes de XXXX

    echo strftime('%A, %d de %B de %Y.', time()) . '<br>';  // data por extenso
    
    setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf8', 'portuguese');

    echo strftime('%A, %d de %B de %Y.', time()) . '<br>';  // data por extenso

    $amanha = time() + (24 * 60 * 60);
    echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

    $proximaSemana = strftime('+1 week');
    echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

    $dataFixa = mktime(15, 30, 50, 1, 25, 1975);
    echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);