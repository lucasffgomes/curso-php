<div class="titulo">Datas #02</div>

<?php
    $formatoData1 = 'D, d \d\e M \d\e Y';
    $formatoData2 = '%A, %d de %B de %Y';
    $formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();

    print_r($agora);
    echo '<br>';

    echo $agora->format($formatoData1) . '<br>';

    setlocale(LC_TIME, 'pt-BR');
    echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

    $amanha = new DateTime('+1 day');
    echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

    $dataFixa = new DateTime('1975-01-25 15:30:50');
    echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

    $amanha->modify('+1 day');
    echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

    $amanha->setDate(1997, 2, 28);
    echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

    $dataPassada = new DateTime('2001-09-11');
    $dataFutura = new DateTime('2061-07-28');
    $outraData = new DateTime('2020-12-13');
    echo ($amanha > $dataPassada ? 'Maior.' : 'Menor.') . '<br>';
    echo ($amanha > $dataFutura ? 'Maior.' : 'Menor.') . '<br>';
    echo ($outraData == $dataFutura ? 'Igual.' : 'Diferente.') . '<br>';

    echo '<br>';

    // definir um TimeZone
    // $tz = new DateTimeZone('America/Sao_Paulo');
    // $agora = new DateTime(null, $tz);
    // echo $agora->format('d/M/Y H:i:s');