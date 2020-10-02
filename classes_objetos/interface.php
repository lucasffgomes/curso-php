<div class="titulo">Interface</div>

<?php
    // todas as interfaces têm somente métodos e por padrão são públicos
    interface Animal {
        function respirar();
    }

    interface Canino {
        function latir(): string;
    }

    interface Mamifero {
        function mamar();
    }

    interface Felino {
        function correr();
    }

    class Cachorro implements Animal, Canino {
        function respirar() {
            return 'Irei usar oxigênio!';
        }

        function latir(): string {
            return 'Au Au';
        }

        function mamar() {
            return "Irei tomar leite!";
        }

        function correr() {
            return "vrunnnnn!";
        }
    }

    $animal = new Cachorro();
    echo $animal->respirar(), '<br>';
    echo $animal->latir(), '<br>';
    echo $animal->mamar(), '<br>';

    echo '<br>';
    var_dump($animal);

    echo '<br>';
    var_dump($animal instanceof Cachorro);
    var_dump($animal instanceof Canino);
    var_dump($animal instanceof Mamifero);
    var_dump($animal instanceof Animal);