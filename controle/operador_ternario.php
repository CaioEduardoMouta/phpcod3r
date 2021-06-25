<div class="titulo"> Operador Ternario</div>

<?php 
$idade = 70;
$status;

if($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Menor de idade' : 'Menor de idade';
echo "$status<br>";

 $tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de Idade';
 echo "$status<br>";
 
 $status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de idade';
 echo "$status<br>";