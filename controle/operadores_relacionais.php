<div class="titulo">Operadores Relacionais</div>

<?
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 21);
var_dump(1 <= 9);
var_dump(1 <> 1);
var_dump(1 != 1);

var_dump(1 == '1');
var_dump(1 === '1'); // comparação estrita
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p class='divisao'> Relacionais no If/Else</p><hr>";

$idade = 65;
if($idade < 18) {
    echo "Menor de idade = $idade <br>";
} else if($idade < 65) {
    echo "Adulto = $idade<br>";
}else {
    echo "Terceira idade! = $idade";
}

echo '<p class='divisao'>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p class='divisao'>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>



