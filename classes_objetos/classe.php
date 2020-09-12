<div class="titulo">Primeira Classe</div>

<?php
    class Cliente {
        // atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar() {
            return "Nome: {$this->nome} e idade: {$this->idade}<br>";
        }
    }

    // primeiro objeto
    $cliente1 = new Cliente();
    $cliente1->nome = 'Karen Gomes';
    $cliente1->idade = 23;
    echo $cliente1->apresentar();

    // segundo objeto
    $cliente2 = new Cliente();
    $cliente2->nome = 'Lucas Gomes';
    $cliente2->idade = 22;
    echo $cliente2->apresentar();