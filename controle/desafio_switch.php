<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milhas > KM</option>
        <option value="metro-km">Metros > KM</option>
        <option value="km-metro">KM > Metros</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
    </select>
    <button type="submit">Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.5rem;
    }
</style>

<?php
    if($_POST != null) {

        // echo $_POST['param'] . "<br>";
        // echo $_POST['conversao'];

        $valor = $_POST['param'];
        
        // echo $comprimento;

        switch($_POST['conversao']){
            case "km-milha";
                echo $valor * 0.621371 . "mi.";
                break;
            case "milha-km";
                echo $valor * 1.60934 . "km.";
                break;
            case "metro-km";
                echo $valor / 1000 . "km.";
                break;
            case "km-metro";
                echo $valor * 1000 . "m.";
                break;
            case "c-f";
                $graus = ( $valor * (9 / 5) ) + 32;
                echo $graus . " ºF";
                break;
            case "f-c";
                $graus = ($valor - 32) * (5 / 9);
                echo $graus . " ºC";
                break;
        }
        // $formatado = number_format($comprimento, 2, ",", ".");
        // echo "<br>";
        // echo $formatado;
    }