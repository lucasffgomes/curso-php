<?php
    // session_start();
    if(!isset($_SESSION)) {
        session_start();
    }

    error_reporting(0);  // retirando avisos de erros.


    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email']) {
        $usuarios = [
            [
                "nome" => "Aluno Cod3r",
                "email" => "aluno@cod3r.com.br",
                "senha" => "1234567",
            ],
            [
                "nome" => "Lucas Gomes",
                "email" => "lucas@email.com.br",
                "senha" => "1234567"
            ],
            [
                "nome" => "Sandro Jorge",
                "email" => "sandro@email.com",
                "senha" => "root"
            ]
        ];

        foreach($usuarios as $usuario) {
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];

            if($emailValido && $senhaValida) {
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                $expiracao = time() + 60 * 60 * 24 * 30;  // cookie!
                setcookie('usuario', ['nome'], $expiracao);
                header('Location: index.php');
            }
        }

        if(!$_SESSION['usuario']) {
            $_SESSION['erros'] = ['Usuário/Senha inválido!'];
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link rel="stylesheet" href="recursos/css/login.css">
        <title>Curso PHP</title>
    </head>
    <body class="login">
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Seja Bem Vindo</h2>
        </header>
        <main class="principal">
            <div class="conteudo">
                <h3>Identifique-se</h3>
                <?php if ($_SESSION['erros']): ?>
                    <div class="erros">
                        <?php foreach ($_SESSION['erros'] as $erro): ?>
                            <p><?= $erro ?></p>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <form action="#" method="post">
                    <div>
                        <label for="email">E-mail: </label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <button>Entrar</button>
                </form>
            </div>
        </main>
        <footer class="rodape">
            LUCASFFGOMES - <?= date('d/m/Y'); ?>
        </footer>
    </body>
</html>
