<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Registro</div>

<?php
    require_once 'conexao.php';
    $conexao = novaConexao();

    if($_GET['codigo']) {
        $sql = "SELECT * FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $_GET['codigo']);

        if($stmt->execute()) {
            $resultado = $stmt->get_result();
            if($resultado->num_rows > 0) {
                $dados = $resultado->fetch_assoc();
                if($dados['nascimento']) {
                    $dt = new DateTime($dados['nascimento']);
                    $dados['nascimento'] = $dt->format('d/m/Y');
                }
                if($dados['salario']) {
                    $dados['salario'] = str_replace(".", ",", $dados['salario']);
                }
            }
        }
    }

    // verifica se tem algum caractere no campo nome.
    if(count($_POST) > 0) {
        $dados = $_POST;
        $erros = [];

        if(trim($dados['nome']) === "") {
            $erros['nome'] = 'Nome é obrigatório!';
        }

        // verifica se a data está no formato dd/mm/aaaa.
        if(isset($dados['nascimento'])) {
            $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
            if(!$data) {
                $erros['nascimento'] = "Data deve estar no formato dd/mm/aaaa!";
            }
        }

        // verifica se o email está no formato nome@nome.com
        if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            $erros['email'] = 'Email inválido.';
        }

        // verifica se o site possui uma URL válida
        if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
            $erros['site'] = 'Site inválido.';
        }

        // verifica se a qtde de filhos está dentro do range de 0 a 20.
        $filhosConfig = [  'options' => ['min_range' => 0, 'max_range' => 20]  ];
        if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
            $erros['filhos'] = 'Quantidade inválida.';
        }

        // verifica se o salario está no formato correto.
        $salarioConfig = ['options' => ['decimal' => ',']];
        if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
            $erros['salario'] = 'Salário inválido.';
        }

        if(!count($erros)) {
            $sql = "UPDATE cadastro SET
                nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
                WHERE id = ?";

            $stmt = $conexao->prepare($sql);

            $params = [
                $dados['nome'],
                $data ? $data->format('Y-m-d') : null,
                $dados['email'],
                $dados['site'],
                $dados['filhos'],
                $dados['salario'] ? str_replace(",", ".", $dados['dados']) : null,
                $dados['id'],
            ];

            $stmt->bind_param("ssssidi", ...$params);

            if($stmt->execute()) {
                unset($dados);
            }
        }

    }
?>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" // $erro ?>
    <!-- </div> -->
<?php endforeach ?>

<form action="/exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" class="form-control" name="codigo" value="<?= $_GET['codigo'] ?>" placeholder="Informe o código para consulta">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Consultar</button>
        </div>
    </div>
</form>

<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Digite seu nome" value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Data de nascimento" value="<?= $dados['Nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Digite seu E-mail" value="<?= $dados['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Informe um site" value="<?= $dados['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Tem quantos fihos?" value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Informe o salario" value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>

