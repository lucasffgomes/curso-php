<div class="titulo">Modificador Final</div>

<?php
    // método final não pode ser alterado em nenhuma parte do código!
    abstract class Abstrata {
        abstract public function metodo1();

        final public function metodo2() {
            echo 'Não pode ser alterado!<br>';
        }
    }

    // class Classe extends Abstrata {
    //     public function metodo1() {
    //         echo 'Executando método 1.<br>';
    //     }

    //     // public function metodo2() {
    //     //     echo 'Extendendo método 2.<br>';
    //     // }
    // }

    // $classe = new Classe();
    $classe->metodo1();
    $classe->metodo2();

    final class Unica {
        public $atributo;
    }

    // classe final não pode ser herdada em nenhuma parte do código!

    // class Duplicata extends Unica {
    //     public $atributo2;
    // }