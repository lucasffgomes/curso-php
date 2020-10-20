<div class="titulo">Ler Arquivos</div>

<?php
    $arquivo = fopen('teste.txt', 'r');  // r->modo de leitura
    echo fread($arquivo, 10);  // quantidade de bytes a ser lido.
    echo '<br>';
    echo fread($arquivo, 10);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    $tamanho = filesize('teste.txt');
    echo $tamanho . 'bytes' . '<br>';
    echo fread($arquivo, $tamanho);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    echo fgets($arquivo), '<br>';  // lê a linha inteira.
    echo fgets($arquivo), '<br>';
    var_dump(fgets($arquivo)) . '<br>';
    fclose($arquivo);
    
    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    // ler arqivo até o final dos bytes.
    while(!feof($arquivo)) {
        echo fgets($arquivo), '<br>';
    }
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r+');
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    fwrite($arquivo, "\nAdicionado durante a leitura");
    fclose($arquivo);

    echo 'Fim!';