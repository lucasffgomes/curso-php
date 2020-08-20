<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="" method="post">
    <div>
        <label for="t1">Trabalho 1 - (Terça)</label>
        <select name="t1" id="t1">
            <option value="0">Não Executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 - (Quinta)</label>
        <select name="t2" id="t2">
            <option value="0">Não Executado</option>
            <option value="1">Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php
// echo $_POST['t1'];
// echo $_POST['t2'];

if ( $_POST['t1'] == true && $_POST['t2'] == true) {
    echo("Vai comprar a TV de 50' e tomar sorvete!");

} elseif ( $_POST['t1'] == true || $_POST['t2'] == true ) {
    echo("Vai comprar a TV de 32' e tomar sorvete.");
    
} else {
    echo("Fica em casa e não toma sorvete.");
}
