<div class="titulo">Construtor e Destrutor</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        // método CONSTRUTOR serve para definir os atributos de uma classe no momento que é criado!
        function __construct($novoNome, $idade = 18) {
            echo 'Construtor invocado! <br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct() {
            echo 'Destrói objeto. <br>';
        }

        public function apresentar() {
            echo "{$this->nome}, {$this->idade} anos<br>";
        }
    }

    $pessoaA = new Pessoa('Lucas Gomes', 23);
    $pessoaA->apresentar();
    unset($pessoaA);  // chama o destrutor
    
    $pessoaB = new Pessoa('Karen Molina', 22);
    $pessoaB->apresentar();
    $pessoaB = null;

    // $pessoa = new Pessoa(); // problema pois não foi passado nenhum parâmetro.
