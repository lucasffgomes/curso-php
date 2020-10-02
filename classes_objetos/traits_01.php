<div class="titulo">Traits #01</div>

<?php
    /**
     * 
     */
    trait validacao {
        public $a = 'Valor A';

        public function validarString($string) {
            return isset($string) && $string !== '';
        }
    }
    
    trait validacaoMelhor {
        public $b = 'Valor B';
        private $c = 'Valor privado';

        public function validarStringMelhor($string) {
            return isset($string) && trim($string);
        }
    }

    class Usuarioo {
        use validacao, validacaoMelhor;

        public function imprimirValorC() {
            echo '<br>', $this->c;
        }
    }

    $usuario = new Usuarioo();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validarStringMelhor(' '));
    echo '<br>';
    echo $usuario->a, '<br>', $usuario->b;
    echo '<br>';
    echo $usuario->a, '<br>', $usuario->b;