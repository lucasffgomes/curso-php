<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo("Nós também" . ' somos');
echo '<br>', "Também aceito", " vírgulas";

echo '<br>';
echo "'Teste' " . '"Teste"' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

echo '<br>';
echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque architecto quasi eligendi at culpa magni consectetur odio ut amet, optio vel veritatis delectus odit nesciunt dolores itaque ea inventore ad!'; 

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");  // encoding UTF-8
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');  // Troca a string
