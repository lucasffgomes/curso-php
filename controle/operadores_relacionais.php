<div class="titulo">Operadores Relacionais</div>

<?php
// var_dump(1 == 1);
// var_dump(1 > 1);
// var_dump(1 >= 1);
// var_dump(1 <> 1);
// var_dump(1 != 1);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');


echo "<p>Relacionais no If/Else</p><hr>";

$idade = 70;
if($idade < 18) {
    echo "Menor de idade<br>";
} else if($idade < 65) {
    echo "Adulto<br>";
} else {
    echo "Idoso";
}

echo '<p>Spaceship</p><hr>';
var_dump(5 <=> 3);  // int(1)
var_dump(50 <=> 50);  // int(0)
var_dump(5 <=> 50);  // int(-1)

echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}