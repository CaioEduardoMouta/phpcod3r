<div class="titulo">Construtor & Destrutor</div>

<?php 
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        echo 'Construtor Invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;

    }

    function __destruct() {
        echo 'é morreu!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaA->apresentar();
unset($pessoaA);


$pessoaB= new Pessoa('João Pedro', 20);
$pessoaB->apresentar();
$pessoaB = null;


// $pessoa - new Pessoa(); // Problema



