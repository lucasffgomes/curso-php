<?php
    // session_start();
    if(!isset($_SESSION)) {
        session_start();
    }

    error_reporting(0);  // retirando avisos de erros.
    
    if(!$_SESSION['usuario']) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link rel="stylesheet" href="recursos/css/exercicio.css">
        <title>Exercício</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Vizualização do Exercício</h2>
        </header>
        <nav class="navegacao">
            <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
            <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
            <a href="index.php">Voltar</a>
            <a href="logout.php" class="vermelho">Sair</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
            </div>
        </main>
        <footer class="rodape">
            LUCASFFGOMES - <?= date('d/m/Y'); ?>
        </footer>
    </body>
</html>