<div class="titulo">Classe Abstrata</div>

<?php
    abstract class Abstrata {
        abstract public function metodo1();
        abstract protected function metodo2($parametro);
    }
    
    abstract class FilhaAbstrata extends Abstrata {
        public function metodo1() {
            echo 'Executando método 1.<br>';
        }

        abstract public function metodo3();
    }

    class Concreta extends FilhaAbstrata {
        public function meteodo1() {
            echo 'Executando método 1 extendido.<br>';
            parent::metodo1();
        }

        protected function metodo2($parametro) {
            echo "Exeutando método 2, com parâmetro $parametro.<br>";
        }

        public function metodo3() {
            echo 'Executando método3.<br>';
            $this->metodo2('interno');
        }
    }

    $c = new Concreta();
    $c->meteodo1();
    // $c->metodo2('externo');
    $c->metodo3();

    echo "Fim!";