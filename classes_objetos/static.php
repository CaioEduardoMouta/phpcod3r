<div class="titulo">Membro Estático</div>

<?php 
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1

        //Tentativa 2
        //echo "Estática = {self::$static}<br>";
        echo = "Estática =" . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        //echo "Não estatica = {$this->naoStatic}<br>";
        echo "Estática =" . self::$static . "<br>";
    }

}

//$objetoA = new A();
//$objetoA->mostrarA();
//$objetoA->mostrarStaticA(); //não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStaticA();