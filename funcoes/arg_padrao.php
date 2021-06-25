<div class="titulo">Argumento Padrão</div>

<?php 
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem Vindo, $nome $sobrenome! <br>";
}

saudacao();
saudacao(NULL);
saudacao(NULL, NULL);
saudacao ('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para Comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água',$comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida  <br>";
}

// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2','Pizza2');