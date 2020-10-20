<div class="titulo">PDO: Excluir</div>

<?php
    require_once 'conexao_pdo.php';

    // $sql = "DELETE FROM cadastro WHERE id = :id";  // outra forma.
    $sql = "DELETE FROM cadastro WHERE id = ?";

    $conexao = novaConexao();
    $stmt = $conexao->prepare($sql);

    // if($stmt->execute([':id' => 16])) {  // outra forma.
    if($stmt->execute([16])) {
        echo "Sucesso :)";
    } else {
        echo "Erro :(";
        print_r($stmt->errorInfo());
    }
