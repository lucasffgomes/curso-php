<div class="titulo">Desafio Palindromo</div>

<form action="#" method="post">
    <input type="text" name="palavra">
    <button type="submit">Verificar</button>
</form>

<style>
    form * {
        font-size: 1.8rem;
    }
</style>

<?php
    $palavraOriginal = $_POST['palavra'];
    $palavraInvertida = strrev($_POST['palavra']);

    if ( $palavraInvertida == $palavraOriginal ) {
        echo "É um Palindromo!";
    } else {
        echo "Não é um Palindromo!";
    }

    echo "------------------------------------------";

    function palindromo($palavraOriginal) {
        $ultimoIndice = strlen($palavraOriginal) -1;
        for($i = 0; $i <= $ultimoIndice; $i++) {
            if($palavraOriginal[$i] !== $palavraOriginal[$ultimoIndice -$i]) {
                return 'Não';
            }
        }
        return 'Sim';
    }

    echo palindromo($palavraOriginal);

    function palindromoSimples($palavraOriginal) {
        return $palavraOriginal === strrev($palavraOriginal) ? 'Sim': 'Não';
        return $palavraOriginal === strrev($palavraOriginal) ? 'Sim': 'Não';
    }