<div class="titulo">Herança</div>

<?php
    // classe principal
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
            echo 'Pessoa Criada! <br>';
        }

        function __destruct() {
            echo 'Pessoa diz: Tchau!';
        }

        public function apresentar() {
            echo "{$this->nome}, {$this->idade} anos<br>";
        }
    }

    // sub-classe de Pessoa
    class Usuario extends Pessoa {
        public $login;

        function __construct($nome, $idade, $login) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->login = $login;
            echo 'Usuário criado!<br>';
        }

        function __destruct() {
            echo 'Usuário diz: Tchau!<br>';
        }

        public function apresentar() {
            echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>";
        }
    }

    $usuario = new Usuario('Lucas Gomes', 23, 'lucasffgomes');
    $usuario->apresentar();
    unset($usuario);