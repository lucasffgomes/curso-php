<div class="titulo">Retornando Função</div>

<?php
    function soma($a) {
        return function($b) use ($a) {  // 'use' serve para usar o parametro da funçao anterior. 
            return $a + $b;
        };
    }

    soma(3)(3);

