<div class="titulo">Desafio Data</div>

<?php
class Data {
    // atributos 
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970

    public function apresentar() {
        return "{$this->dia} 
        \ {$this->mes}
        \ {$this->ano}";
    }
 }

$c1 = new Data();
$c1->dia = 16;
$c1->dia = 07;
$c1->dia = 2020;
echo $c1->apresentar(), '<br>';

 ?>
