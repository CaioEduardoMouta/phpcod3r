<div class="titulo">Operadores Logicos</div>

<?php
echo "<p class='divisao'>V ou F</p>";
var_dump(true);
echo '<br>';
var_dump(!true); // not negação lógica

echo "<p class='divisao'>Tabela verdade do AND (E) </p><hr>";
var_dump(true && true); // pode ser usando também and
var_dump(true && false); 
var_dump(false && true);// se o primeiro é falso a expressão é falsa
var_dump(false && false);
var_dump(false and false);
var_dump(true && 3 > 2 && 7 <= 7 && 3 === '3');

echo "<p class='divisao'>Tabela verdade do OR (OU) </p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false); // só falso quando os dois são falsos

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela verdade do XOR (OU Exclusivo) </p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo "<p class='divisao'>Tabela verdade do <> (Diferente) </p><hr>";
var_dump(true <> true);
var_dump(true <> false);
var_dump(false <> true);
var_dump(false <> false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

$pagouPrevidencia = true;
$podeSeAposentar = $pagouPrevidencia && 
(
    ($idade >= 60 && $sexo === 'F') 
|| ($idade >= 65 && $sexo === 'M')
);

echo "Pode se aposentar -> $podeSeAposentar.<br>";


if($idade >= 60 && $sexo === 'F') {
    echo 'Pode se Aposentar';
} elseif($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar';
}

?>

