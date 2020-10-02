<div class="titulo">Membros Estáticos</div>

<?php
    class A {
        public $naoStatic = 'Variável de instância';
        public static $static = 'Variável de classe (estática)';
        
        public function mostrarA() {
            echo "Não estático = {$this->naoStatic}<br>";
            // tentativa 1
            // echo "Estática = {$this->static}<br>"; não funciona pois pertence a uma instância!
            // tentativa 2
            // echo "Estática = {self::$static}<br>"; não funciona na interpolação!
            // tentativa 3 
            echo "Estática = " . self::$static . "<br>";
        }

        public static function mostrarStaticA() {
            // echo "Não estática = {$static}<br>";
            echo "Estática = " . self::$static . "<br>";
        }
    }

    $objetoA = new A();
    $objetoA->mostrarA();
    // $objetoA->mostrarStaticA();  não é a forma ideal
    A::mostrarStaticA();

    echo '<br>';
    echo A::$static, '<br>';  // acessar diretamente pela classe
    A::mostrarStaticA(); // acessar diretamente pela classe

    A::$static = 'Alterado membro de classe!';
    echo A::$static, '<br>'; // acessar diretamente pela classe