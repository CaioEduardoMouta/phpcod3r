<div class="titulo">Arrays Constantes</div>

<?php 
const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS[0] = 'banana';

echo FRUTAS[0];

const CARROS = ["fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES' , array('BELO HORIZONTE', 'RECIFE'));
echo '<br>' . CIDADES[1];