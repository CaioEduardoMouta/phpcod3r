<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface mamifero {
    function mamar();
}

//interface pode extender outras interfaces

interface Canino extends Animal{

    // esses metodos são publicos não tem como deifinir
    // um metodo privado ou protegido
    
    function latir(): string;
    function correr();
}

interface Felino {
    function correr();
}

class Cachorro implements Animal, canino {
    function respirar() {
        return "Irei usar oxigênio!<br>";
    }

    function latir(): string {
        return 'Au Au';
    }

    function mamar() {
        return "Satisfeito";
    }
    function correr() {
        return "vrumm";
    }
}

$animal = new Cachorro();
echo $animal->respirar() '<br>';
echo $animal->mamar() '<br>';
echo $animal->latir() . '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);

