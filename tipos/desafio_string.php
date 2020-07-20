<div class="titulo">Desafio String</div>

<?php

/* Enunciado:
Avaliando os métodos da documentação da String,
qual o método que a posição do texto 'abc' 
na string '!AbcaBcabc' retorne 1?
*/

$string = '!AbcaBcabc';

echo strpos($string, 'abc') . '<br>';
echo stripos ('!AbcaBcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));