<div class="titulo">Inserir Registro #01</div>

<?php
    require_once 'conexao.php';

    $sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (
            'Karen Martins',
            '1997-03-19',
            'karenmartins@email.com',
            'https://kkk.com.br',
            0,
            1350.00
        )";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    if($resultado) {
        echo 'Sucesso!';
    } else {
        echo 'Erro: ' . $conexao->error;
    }

    $conexao->close();