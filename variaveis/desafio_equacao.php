<div class="titulo">Desafio Equação</div>

<?php

$equacaoA = ((6 * (3 + 2)) ** 2) / (3 * 2);
$equacaoB = (((1 - 5) * (2 - 7)) / 2) ** 2;

$equacaoAeB = ($equacaoA - $equacaoB);

$resultadoFinal = ($equacaoAeB ** 3) / (10 ** 3);

echo $resultadoFinal;
