<div class="titulo">Traits #02</div>

<?php
    trait validacao {
        public function validarString($string) {
            return isset($string) && $string !== '';
        }
    }

    trait validacaoMelhor {
        public function validarString($string) {
            return isset($string) && trim($string);
        }
    }

    class Usuariooo {
        use validacao, validacaoMelhor {
            validacaoMelhor::validarString insteadof validacao;
            // validacao::validarString insteadof validacaoMelhor;

            validacao::validarString as validacaoSimples;
        }
    }

    $usuario = new Usuariooo();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validacaoSimples(' '));