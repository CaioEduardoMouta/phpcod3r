<div class="titulo">Visibilidade</div>

<?php 
class A {
    public $public = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>"
    }

    private function naoMostrar() {
        echo 'Não vou Imprimir!<br>';
    }

    protected function vaiPorHerança() {
        echo 'Serei transmitido por herança!<br>';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

echo "Fim!";

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";
        
        parent::vaiPorHerança();
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
$b->naoMostrar();