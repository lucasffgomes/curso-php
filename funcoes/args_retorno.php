<div class="titulo">Argumentos & Retorno</div>

<?php
    function obterMensagem() {
        return 'Seja bem vindo!';
    }

    obterMensagem();
    $m = obterMensagem();
    echo $m;
    echo '<br>', obterMensagem();
    echo '<br>';
    var_dump(obterMensagem());

    function obterMensagemComNome($nome) {
        return "Bem vindo, {$nome}!";
    }

    echo '<br>', obterMensagemComNome('Lucas');
    echo '<br>', obterMensagemComNome('Karen');

    function soma($a, $b) {
        return $a + $b;
    }

    $x = 4;
    $y = 5;
    echo '<br>', soma(23, 23);
    echo '<br>', soma($x, $y);

    function trocaValor($a, $novoValor) {
        $a = $novoValor;
    }

    $variavel = 1;
    trocaValor($variavel, 3);
    echo '<br>', $variavel;

    function trocarValorDeVerdade(&$a, $novoValor) {
        $a = $novoValor;
    }

    trocarValorDeVerdade($variavel, 5000);
    echo '<br>', $variavel;