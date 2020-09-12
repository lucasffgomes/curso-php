<div class="titulo">Desafio Data</div>

<?php
    class Data {
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        public function mostrarData() {
            return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    // objeto
    $data = new Data();
    $data->dia = 28;
    $data->mes = '02';  // em string para mostrar o zero
    $data->ano = 1997;
    echo $data->mostrarData();
    echo '<br>';

    // objeto
    $dataCasamento = new Data();
    $dataCasamento->dia = 13;
    $dataCasamento->mes = 12;
    $dataCasamento->ano = 2020;
    echo $dataCasamento->mostrarData();
    echo '<br>';
