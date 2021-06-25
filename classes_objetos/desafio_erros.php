<div class="titulo">Desafio Erros</div>

<?php 
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

//abstrata só pode extender interface usando a palavra
//implements 
abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
    public function metodo1() {
    
    }
}

//Uma classe ela não implementar outra classe 
//ela extends
class Classe extends ClasseAbstrata {
    function __construct($parametro) {
        
    }

    public function metodo2($parametro) {

    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();