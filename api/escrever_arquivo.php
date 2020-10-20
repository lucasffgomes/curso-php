<div class="titulo">Escrever Arquivo</div>

<?php
    $arquivo = fopen('teste.txt', 'w');  // nome do arquivo e modo de abrir o arquivo (w->escrita).
    fwrite($arquivo, "Valor inicial\n");  // escrever dentro do arquivo.
    $str = "Segunda linha\n";
    fwrite($arquivo, $str);
    fclose($arquivo);  // fechar arquivo

    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Novo conteúdo");
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'a');  // (a->append) modo de edição.
    fwrite($arquivo, " com novos valores.\n");
    fwrite($arquivo, "Adicionados em um segundo momento");
    fclose($arquivo);

    ini_set('display_errors', 1);
    $arquivo = fopen('teste.txt', 'x');  // garantir que seja um arquivo novo, inexistente.
    fwrite($arquivo, "Arquivo novo!!!");
    fclose($arquivo);